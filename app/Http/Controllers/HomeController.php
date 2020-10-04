<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $activities = Post::where('type', '=', '0')->paginate(3); // activity
        $products = Post::where('type', '=', '1')->limit(3)->get(); // activity
        $users = DB::table('users')->whereBetween('student_code', [0, 1])->get();
        return view('about', ['activities' => $activities, 'users' => $users,  'products' => $products]);
    }
}