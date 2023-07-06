<?php

use App\Http\Controllers\RekomendasiController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

// Route::get('/rekomendasi', [App\Http\Controllers\DecisionTreeHelper::class, 'index'])->name('rekomendasi');

Route::get('/rekomendasi', [RekomendasiController::class,'hasilRekomendasi'])->name('hasilRekomendasi');
// Route::get('/rekomendasi', 'RekomendasiController@index');

// Route::get('/rekomendasi', 'RekomendasiController@index')->name('rekomendasi.index');

Route::get('/penjual', 'PegawaiController@index');

// Route::post('/submit-form', 'FormController@submitForm')->name('submit-form');
