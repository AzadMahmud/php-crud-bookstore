<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BookController::class,'index'])->name('books.index');
Route::get('{id}/view',[BookController::class,'view'])->name('books.view');
Route::get('{id}/edit',[BookController::class,'edit'])->name('books.edit');
Route::post('update',[BookController::class,'update'])->name('books.update');
Route::get('create',[BookController::class,'create'])->name('books.create');
Route::post('books',[BookController::class,'store'])->name('books.store');
Route::delete('delete',[BookController::class,'destroy'])->name('books.destroy');