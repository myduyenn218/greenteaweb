<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::paginate(3);
        $users = DB::table('users')->whereBetween('student_code', [0, 1])->get();
        // echo ($users);


        return view('about', ['products' => $products, 'users' => $users]);
    }
}