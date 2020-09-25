<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $activitis = Product::where('is_activity', '=', '1')->paginate(3); // activity
        $products = Product::where('is_activity', '=', '0')->limit(3)->get(); // activity
        $users = DB::table('users')->whereBetween('student_code', [0, 1])->get();
        return view('about', ['activitis' => $activitis, 'users' => $users,  'products' => $products]);
    }
}