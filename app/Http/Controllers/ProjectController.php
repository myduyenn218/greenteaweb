<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Job;

class ProjectController extends Controller
{
    //
    public function project()
    {
        $jobs = Job::paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('post', ['jobs' => $jobs]);
    }
}
