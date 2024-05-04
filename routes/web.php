<?php

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
    return view('index');
})->name('indexx');
Route::get('category', function () {
    return view('Categoryform');
})->name('categoform');

////Controller_Routes///////////
Route::get('categories',[App\Http\Controllers\CategoryController::class,'index'])->name('output');
Route::get('categories/create',[App\Http\Controllers\CategoryController::class,'create']);
Route::post('categories/store',[App\Http\Controllers\CategoryController::class,'store'])->name('form');
Route::get('editcategory/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('editcategoform');
Route::put('categories/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update');
Route::delete('categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('destroy');