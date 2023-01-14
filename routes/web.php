<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminMengaturController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminTentangController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminKategoriController;





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

Route::get('/', function () {
    $data = [
        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
});



Route::get('/about', function () {
    $data = [
        'content'=> 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/service', function () {
    $data = [
        'content'=> 'home/service/index'
    ];
    return view('home.layouts.wrapper',$data);
});



Route::get('/blog', function () {
    $data = [
        'content'=> 'home/blog/index'
    ];
    return view('home.layouts.wrapper',$data);
});



Route::get('/contact', function () {
    $data = [
        'content'=> 'home/contact/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/login', function () {
    $data = [
        'content'=> 'home/auth/index'
    ];
    return view('home.layouts.wrapper',$data);
});

// Admin
Route::prefix('/admin')->group(function (){
    Route::get('/dasboard', function () {
        $data = [
        'title' => 'dasboard',
        'content'=> 'admin/dasboard/index'
    ];

        return view ('admin.layouts.wrapper', $data);
    });

    
    Route::get('/tentang', [AdminTentangController::class, 'index']);
    Route::put('/tentang/update', [AdminTentangController::class, 'update']);

    


    Route::resource('/blog', AdminBlogController::class);
    Route::resource('/kategori', AdminKategoriController::class);

    Route::resource('/user', AdminUserController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/mengatur', AdminMengaturController::class);
    Route::resource('/about', AdminAboutController::class);



});