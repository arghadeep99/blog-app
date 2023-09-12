<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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
    return redirect()->route('blogs.index');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('blogs', BlogController::class)->only('index');

Route::middleware(['auth'])->group(function() {
    Route::get('blogs/my-blogs', [BlogController::class, 'my_blogs'])->name('my-blogs');
    Route::resource('blogs', BlogController::class)->except(['index','show']);
});


Route::get('blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
