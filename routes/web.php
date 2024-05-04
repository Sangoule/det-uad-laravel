<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
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
    return view('index');
});
Route::get('/dahira-bi', function () {
    return view('dahirabi');
});
Route::get('/evenements', function () {
    return view('evenement');
});
Route::get('/bibliotheques', function () {
    return view('bibliotheque');
});
Route::get('/les-serignes', function () {
    return view('seriñe-ći');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::resource('users', UserController::class);
// Auth::routes();
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
