<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallWindownController extends Controller
{
    //
    public function install()
    {
        return view('install-windown');
    }
}