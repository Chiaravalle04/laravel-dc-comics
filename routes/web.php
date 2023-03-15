<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\ComicController;

// Models
use App\Models\Comic;

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

// Home page
Route::get('/', function () {

    $navBar = config('nav_bar');

    return view('welcome', compact('navBar'));

});

// Login
Route::get('/login', function () {

    $navBar = config('nav_bar');

    return view('login', compact('navBar'));

})->name('login');

// Admin Home page
Route::get('/admin', function () {

    $comics = Comic::all();

    return view('admin_home', compact('comics'));

})->name('admin_home');

// Resources
Route::resource('comics', ComicController::class);
