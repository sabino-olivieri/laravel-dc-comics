<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::resource('comics', ComicController::class);

Route::get('/trash', [ComicController::class, 'trash'])->name('comics.trash');

Route::put('/trash/{comic}', [ComicController::class, 'restore'])->name('comics.restore');

Route::delete('/trash/{comic}', [ComicController::class, 'delete'])->name('comics.delete');