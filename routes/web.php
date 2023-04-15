<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::name('view.')->controller(ViewController::class)->group(function () {

    Route::get('/register', 'registerView')->name('register');
    Route::get('/login', 'loginView')->name('login');
});

Route::name('auth.')->controller(AuthController::class)->group(function () {

    Route::post('/registerUser','store')->name('user.store');
    Route::post('/loginUser','login')->name('user.login');
});

