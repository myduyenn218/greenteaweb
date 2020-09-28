<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        return redirect('/profile')->with(['mes'=>"Update success!"]);
    }

}
