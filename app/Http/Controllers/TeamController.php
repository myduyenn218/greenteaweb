<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    //
    public function team()
    {
        $users = User::paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('team', ['users' => $users]);
    }
}