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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/post/show/{id}', [App\Http\Controllers\PostController::class, 'show']);
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::get('/post/destroy/{id}', [App\Http\Controllers\PostController::class, 'destroy']);