<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagePage extends Controller
{
    protected $namespace = 'App\http\Controllers\Admin';
    
    public function showCreatePage()
    {
        return view("page-creator");
    }

}
