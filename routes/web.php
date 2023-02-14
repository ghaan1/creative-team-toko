<?php

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

// Route::get('/', function () {
//     return view('home');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'index'])->name('tentang');


Route::get('/', function () {
    return view('dashboard/index');
});
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
Route::get('/form', function () {
    return view('dashboard/form');
});
Route::get('/maps', function () {
    return view('dashboard/maps');
});
Route::get('/table', function () {
    return view('dashboard/table');
});
Route::get('/user', function () {
    return view('dashboard/user');
});
