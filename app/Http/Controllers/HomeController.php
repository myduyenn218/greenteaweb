<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $jobs = Job::paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('about', ['jobs' => $jobs]);
    }
}
