<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Profile extends Controller
{
    function showProfile()
    {
        $user = session('auth');
        return view('profile', ['user' => $user]);
    }

    function changeProfile(Request $request)
    {
        $user = Session::get('auth');
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->phone = $request->get('phone');
        $user->content = $request->get('content');
        $user->save();
        return redirect('/profile')->with(['mes' => "Update success!"]);
    }

    function changeAvt(Request $request)
    {

        $user = Session::get('auth');
        if ($request->get('avt')) {
            $user->avt = $request->get('avt');
            $user->save();
        }
        error_log('ddayyyy nef:   ' . $request->query('avt'));
        return \Response::json($request->get('avt'));
    }
}
