<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function activity()
    {
        $posts = Post::where('type', '=', '1')->paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('post', ['posts' => $posts]);
    }
}