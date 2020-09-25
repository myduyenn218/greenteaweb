<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function activity()
    {
        $products = Product::where('is_activity', '=', '1')->paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('post', ['products' => $products]);
    }
}