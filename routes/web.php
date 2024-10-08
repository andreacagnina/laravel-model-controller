<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;
use App\Http\Controllers\Guest\MovieController as MovieController;
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
// })->name('homepage');

Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies_show_more');
