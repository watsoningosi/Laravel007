<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\BlogPostsController::class, 'indexAdmin'])->name('home');
Route::get('', [App\Http\Controllers\BlogPostsController::class, 'index'])->name('home');
Route::post('/pages/create', 'App\Http\Controllers\BlogPostsController@store');
Route::get('/pages/create', 'App\Http\Controllers\BlogPostsController@create');
Route::get('/pages/posts/{posts}', 'App\Http\Controllers\BlogPostsController@show');
Route::get('/home/{posts}/edit', 'App\Http\Controllers\BlogPostsController@edit')->name('BlogPost.edit');
Route::put('/home/{posts}/edit', 'App\Http\Controllers\BlogPostsController@update')->name('BlogPost.update');
Route::delete('/home/{posts}/1', 'App\Http\Controllers\BlogPostsController@destroy')->name('BlogPost.destroy');
