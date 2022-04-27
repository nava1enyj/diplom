<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RecordsContoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

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

Route::view('/', 'home.index')->name('home');


Route::name('user.')->group(function (){

    Route::get('/login' , [LoginController::class, 'index'])->name('login');

    Route::get('/register' , [RegisterController::class, 'index'])->name('register');

    Route::get('/profile' , [ProfileController::class, 'index'])->middleware('auth')->name('profile');

    Route::post('/login' , [LoginController::class , 'login']);

    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/logout', function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');


    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

Route::get('/news' , [NewsController::class, 'index'])->name('news');

Route::get('/records' , [RecordsContoller::class , 'index'])->name('records');
