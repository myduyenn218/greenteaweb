<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('post');
//});
Route::get("/", "App\\Http\\Controllers\\HomeController@home");

Route::get("login", [\App\Http\Controllers\Auth\LoginControler::class, 'showLogin']);
Route::post("login", [\App\Http\Controllers\Auth\LoginControler::class, 'doLogin'])->name("login");

Route::get('/product', "App\\Http\\Controllers\\ProductController@product");
Route::get('/activity', "App\\Http\\Controllers\\ActivityController@activity");
Route::get('/page-create', function () {
    return view('page-creator');
});
Route::get('/my-project', function () {
    return view('my-project');
});
Route::get('/profile', function () {
    return view('profile');
});