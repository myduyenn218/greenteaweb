<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateAccountController extends Controller
{
    //
    function index()
    {
        return view("create-account");
    }

    // function create(Request $request)
    // {
    //     // check validate
    //     // echo($request->content);
    //     //  Save to DB
    //     if ($request->title && $request->content)
    //         POST::create([
    //             'title' => $request->title,
    //             'content' => $request->content,
    //         ]);
    //     return view('page-creator', ["mess"=>'Create ' . $request->title . ' successful']);
    // }
}