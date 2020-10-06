<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ProductController extends Controller
{
    //
    public function product()
    {
        $posts = Post::where('type', '=', '0')->paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('post', ['posts' => $posts]);
    }
}