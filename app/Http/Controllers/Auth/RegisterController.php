<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    //
    public function showRegister()
    {
        return view('register');
    }

    public function doRegister(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'pass' => 'required|min:8',
            'repass' => 'required|same:pass',
        ], $this->messages());
        $user = User::where('email', '=', $request->email)->first();
        // email không tồn tại gửi email mơi
        if ($user == null) {
            $user = User::create([
                'fullname' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->pass),
            ]);
            SendEmail::dispatch($user)->onQueue('sendemail');
            return redirect()->route('register')->withErrors(['mes' => 'Đăng ký thành công, kiểm tra email để xác nhận']);
        } else {
            // đã tồn tại active 1 thông báo lỗi
            if ($user->active == 1) {
                return redirect()->back()
                    ->withInput($request->only('email', 'name'))
                    ->withErrors(['email' => 'Email has already existed.']);
            } else {
                // email tồn tại active = 0 gửi lại email
                SendEmail::dispatch($user)->onQueue('sendemail');
                $user->update();
//                return redirect('verify');
                SendEmail::dispatch($user)->onQueue('sendemail');
                return redirect()->route('register')->withErrors(['mes' => 'Đăng ký thành công, kiểm tra email để xác nhận']);
            }
        }
    }

    public function register()
    {
        Session::put('signup', true);
        return redirect('login');
    }

    public function confirmEmail($email, $key)
    {
        //		Session::forget( 'signup' );
        $u = User::select('id', 'email', 'random_key', 'active')
            ->where('email', '=', $email)
            ->where('active', '=', '0')->get();

        if (count($u) == 1 && $u[0]->email == $email && $u[0]->random_key == $key) {
            //			$kt = Carbon::createFromFormat( 'Y-m-d H:i:s', $u[0]->key_time );
            //			$kt->addHours( 24 );
            //			$now = Carbon::now();
            //			if ( $now->lt( $kt ) == true ) {
            $u[0]->active = 1;
            $u[0]->random_key = '';
            $u[0]->save();
            //			Session::put( 'ok', 123 );

            return redirect('login')->with('ok', 'Verify successful! You are able to login!');
        } else {
            return redirect('login')->withErrors(['mes' => 'ERROR! Email or verify code is not correct.']);
        }
    }


    private function messages()
    {
        return [
            'email.required' => 'Email is required.',
            'email.email' => 'Wrong email format.',
            'email.unique' => 'Email is available',
            'name.required' => 'Name is required',
            'pass.required' => 'Password is required',
            'pass.min' => 'Password is required at least 8 characters',
            'pass.required' => 'Repassword is required',
            'repass.same' => 'Password and repassword do not match',
        ];
    }
}
