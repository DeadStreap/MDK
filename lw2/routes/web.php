<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return view('layout');

});
Route::get('/notepads', [MainController::class, 'index'])->name('notepads.index');
Route::post('/notepads', [MainController::class, 'store'])->name('notepads.store');
Route::get('/notepads/create', [MainController::class, 'create'])->name('notepads.create');
Route::get('notepads/{notepad}/edit', [MainController::class, 'edit'])->name('notepads.edit');
Route::put('notepads/{notepad}', [MainController::class, 'update'])->name('notepads.update');
Route::delete('notepads/{notepad}', [MainController::class, 'destroy'])->name('notepads.destroy');
Route::get('notepads/{notepad}/show', [MainController::class, 'show'])->name('notepads.show');