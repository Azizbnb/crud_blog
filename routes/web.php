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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/index',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    /* Route::get('/create', [App\Http\Controllers\FilmController::class, 'create'])->name('film.create');
    Route::post('/store', [App\Http\Controllers\FilmController::class, 'store'])->name('film.store');
    Route::get('/edit/{id}', [App\Http\Controllers\FilmController::class, 'edit'])->name('film.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\FilmController::class, 'update'])->name('film.update');
    Route::delete('/delete/{id}', [App\Http\Controllers\FilmController::class, 'delete'])->name('film.delete'); */
});

require __DIR__.'/auth.php';
