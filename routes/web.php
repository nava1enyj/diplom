<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SciPopController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CovidController;
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

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/skipop',[SciPopController::class, 'index'])->name('ski-pop');

Route::get('/covid' , [CovidController::class, 'index'])->name('covid');

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

Route::name('game.')->group(function (){

    Route::get('/games', [GameController::class, 'index'])->name('all');

    Route::get('/quiz' , [QuizController::class, 'index'])->middleware('auth')->name('quiz');

    Route::post('/quiz/save', [QuizController::class, 'setResult'])->name('result.add');

    Route::get('/records' , [RecordsController::class , 'index'])->name('quiz.records');
});







