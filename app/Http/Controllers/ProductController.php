<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //
    public function product()
    {
        $products = Product::where('is_activity', '=', '0')->paginate(3);
        // echo ($jobs);
        // dd($jobs->jobtype->name);


        return view('post', ['products' => $products]);
    }
}
