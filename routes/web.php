<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Artikel\ArtikelController;
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

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/view', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::resource('artikel', ArtikelController::class);
Route::get('/artikel/read/{id}', [App\Http\Controllers\Artikel\ArtikelController::class, 'read'])->name('artikel_read');
