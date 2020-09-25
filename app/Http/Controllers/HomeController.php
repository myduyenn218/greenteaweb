<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $users = User::all();
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('about', ['users' => $users]);
    }
}