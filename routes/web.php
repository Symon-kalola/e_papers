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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/admin/add/paper', [App\Http\Controllers\AdminController::class, 'getPaperForm'])->name('getPaperForm');

Route::post('/admin/paper/store', [App\Http\Controllers\AdminController::class, 'storePaper'])->name('storePaper');
Route::get('/admin/request', [App\Http\Controllers\AdminController::class, 'request'])->name('request');
Route::get('/admin/papers', [App\Http\Controllers\AdminController::class, 'papers'])->name('papers');
Route::get('/download/{id}', [App\Http\Controllers\AdminController::class, 'download'])->name('download');
Route::get('/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');