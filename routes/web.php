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


Route::get("/", [\App\Http\Controllers\HomeController::class, 'home']);

Route::get("login", [Auth\LoginControler::class, 'showLogin']);
Route::post("login", [Auth\LoginControler::class, 'doLogin'])->name("login");

Route::get('register', [Auth\RegisterController::class, 'showRegister']);
Route::post('register', [Auth\RegisterController::class, 'doRegister'])->name('register');
Route::get('confirmemail/{email}/{key}', [Auth\RegisterController::class, 'confirmEmail'])->name('confirmemail');

Route::get('forgotpass', [Auth\ForgetPasswordController::class, 'showForgetPass']);
Route::post('forgotpass', [Auth\ForgetPasswordController::class, 'doForgetPass'])->name('forgotpass');
Route::get('confirmforgetpass/{email}/{key}', [Auth\ForgetPasswordController::class, 'doConfirmPassword'])->name('doconfirmpass');

Route::get('/team', "App\\Http\\Controllers\\TeamController@team");
Route::get('/product', "App\\Http\\Controllers\\ProductController@product");
Route::get('/activity', "App\\Http\\Controllers\\ActivityController@activity");
Route::get('/install-windown', "App\\Http\\Controllers\\InstallWindownController@install");
Route::get('/logout', [Auth\LoginControler::class, 'logout']);
Route::get('/my-project', function () {
    return view('my-project');
});
Route::get('/detail', function () {
    return view('detail');
});
// Route::get('/profile', [User\Profile::class, 'showProfile'])->middleware(\App\Http\Middleware\Admin\CheckLogin::class);

// Route::post('/profile', [User\Profile::class, 'changeProfile'])->name('changeProfile')->middleware(\App\Http\Middleware\Admin\CheckLogin::class);
// Route::get('/createpage', [App\http\Controllers\Admin\ManagePage::class, 'showCreatePage'])->middleware(\App\Http\Middleware\Admin\CheckLogin::class);


Route::resource('posts', App\http\Controllers\Admin\PostController::class);

Route::middleware(['checkLogin'])->group(function () {
    
    Route::get('/profile', [User\Profile::class, 'showProfile']);
    Route::post('/profile', [User\Profile::class, 'changeProfile'])->name('changeProfile');
    Route::post('/change-avt/{$avt}', [User\Profile::class, 'changeAvt'])->name('change-avt');

    Route::get('/create-page', [App\http\Controllers\Admin\CreatePostController::class, 'index']);
    Route::post('/create-page', [App\http\Controllers\Admin\CreatePostController::class, 'create'])->name('create-page');


    // Route::controller('UserDatatables', 'App\http\Controllers\Admin\UserDatatablesController', [
    //     'anyData'  => 'UserDatatables.data',
    //     // 'getIndex' => 'UserDatatables',
    // ]);

   
});

Route::get('UserDatatables.data', [App\http\Controllers\Admin\UserDatatablesController::class, 'anyData'])->name('UserDatatables.data');
Route::get('/dashboard', function () {
    return view('dashboard');
});
