<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\ComicController;

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

    $navBar = config('nav_bar');

    return view('welcome', compact('navBar'));

});

Route::resource('comics', ComicController::class);
