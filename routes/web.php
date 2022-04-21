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

Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::get('/admin', function () {
    return redirect()->route('admin.index');
})->middleware(['auth'])->name('admin');

Route::get('/trainer', function () {
    return view('roles.trainer');
})->middleware(['auth'])->name('trainer');

Route::get('/user', function () {
    return view('roles.user');
})->middleware(['auth'])->name('user');

Route::prefix('admin')->group(function () {
    Route::get('/index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');

});

require __DIR__.'/auth.php';
