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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
})->name('dashboard');//->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// MiddlewareAdmin
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware(‘admin’);