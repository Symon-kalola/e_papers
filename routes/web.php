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

Route::get('/papers', [App\Http\Controllers\HomeController::class, 'papers'])->name('papers');

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');


Route::get('/requests', [App\Http\Controllers\HomeController::class, 'requests'])->name('requests');

Route::get('/request/download/{id}', [App\Http\Controllers\HomeController::class, 'download'])->name('download');

Route::get('/request/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');



Route::post('/send/request', [App\Http\Controllers\HomeController::class, 'storeRequest'])->name('storeRequest');




Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/admin/add/paper', [App\Http\Controllers\AdminController::class, 'getPaperForm'])->name('getPaperForm');

Route::post('/admin/paper/store', [App\Http\Controllers\AdminController::class, 'storePaper'])->name('storePaper');
Route::get('/admin/request', [App\Http\Controllers\AdminController::class, 'request'])->name('request');
Route::get('/admin/papers', [App\Http\Controllers\AdminController::class, 'papers'])->name('papers');
Route::get('/download/{id}', [App\Http\Controllers\AdminController::class, 'download'])->name('download');
Route::get('/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');

Route::get('/admin/status/{id}', [App\Http\Controllers\AdminController::class, 'statusUpdate'])->name('statusUpdate');


Route::post('/admin/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');

Route::post('/admin/respond/add', [App\Http\Controllers\AdminController::class, 'updateRequest'])->name('updateRequest');