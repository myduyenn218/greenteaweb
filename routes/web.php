<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\User;
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
Route::get("/",[\App\Http\Controllers\HomeController::class,'home']);

Route::get("login",[Auth\LoginControler::class,'showLogin']);
Route::post("login",[Auth\LoginControler::class,'doLogin'])->name("login");

Route::get('register',[Auth\RegisterController::class,'showRegister'])->name('register');
Route::post('register',[Auth\RegisterController::class,'doRegister'])->name('register');
Route::get('confirmemail/{email}/{key}', [Auth\RegisterController::class,'confirmEmail'])->name('confirmemail');

Route::get('forgotpass', [Auth\ForgetPasswordController::class,'showForgetPass'])->name('forgotpass');
Route::post('forgotpass', [Auth\ForgetPasswordController::class,'doForgetPass'])->name('forgotpass');
Route::get('confirmforgetpass/{email}/{key}', [Auth\ForgetPasswordController::class,'doConfirmPassword'])->name('doconfirmpass');

Route::get('/product', "App\\Http\\Controllers\\ProductController@product");
Route::get('/activity', "App\\Http\\Controllers\\ActivityController@activity");
Route::get('/page-create', function () {
    return view('page-creator');
});
Route::get('/my-project', function () {
    return view('my-project');
});
Route::get('/profile', [User\Profile::class,'showProfile']);

Route::post('/avatar',[User\Avatar::class,'uploadAvatar'])->name('uploadavatar');

Route::post('/profile', [User\Profile::class,'changeProfile'])->name('changprofile');
