<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Admin\ArtikelsController;
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
Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index']);
Route::get('/artikel/read/{id}', [App\Http\Controllers\ArtikelController::class, 'read'])->name('artikel_read');
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::post('/admin/register', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('register_admin');
Route::get('/home/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('adminhome');
Route::get('/home/doctor', [App\Http\Controllers\HomeController::class, 'index'])->name('doctorhome');
Route::get('/admin/artikel', [App\Http\Controllers\Admin\ArtikelsController::class, 'index'])->name('admin.show.artikel');
Route::get('/admin/artikel/insert', [App\Http\Controllers\Admin\ArtikelsController::class, 'create'])->name('admin.add.artikel');
Route::post('/admin/artikel/add', [App\Http\Controllers\Admin\ArtikelsController::class, 'store'])->name('admin.insert.artikel');
Route::delete('/admin/artikel/delete/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'destroy'])->name('admin.artikel.destroy');