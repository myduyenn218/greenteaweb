<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class CreatePostController extends Controller
{


    function index()
    {
        return view("page-creator");
    }

    function create(Request $request)
    {
        // check validate
        // echo($request->content);
        //  Save to DB
        if ($request->title && $request->content)
            POST::create([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        return view('page-creator', ["mess"=>'Create ' . $request->title . ' successful']);
    }
}
