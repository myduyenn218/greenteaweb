<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class Profile extends Controller
{
    function showProfile()
    {
        $user = session('auth');
        return view('profile', ['user' => $user]);
    }

    function changeProfile(Request $request)
    {
        $user = session('auth');
        $user = User::where('id',$user->getId())->get();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->phone = $request->get('phone');
        $user->content = $request->get('content');
        $user->save();
        return view('profile', ['user' => $user]);
    }

}
