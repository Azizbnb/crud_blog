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
    Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');

});

require __DIR__.'/auth.php';
