<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $data =0;
        return view('pages.home.index', compact('data'));
});

Auth::routes([
    'register' => true,
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth', 'auth.admin']],function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/','index');
        Route::get('/anggota','anggota');
        Route::post('/anggota','tambahAnggota');
        Route::get('/iuran','iuran');
        Route::post('/iuran','tambahIuran');
        Route::get('/pengajuan','pengajuan');
    });
});


Route::group(['prefix'=>'user','middleware'=>['auth', 'auth.user']],function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('/','index');
        Route::get('/tambah-pengajuan','tambahPengajuan');
        Route::post('/tambah-pengajuan','tambahDataPengajuan');
        Route::get('/pengajuan','pengajuan');
    });
});
