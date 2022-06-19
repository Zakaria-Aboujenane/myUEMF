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

Route::get('/login',[\App\Http\Controllers\LoginController::class,'gotoLogin']);
Route::get('/posts',[\App\Http\Controllers\PostsController::class,'getAll']);
Route::get('/profil',[\App\Http\Controllers\ProfileController::class,'show_profile']);
Route::get('/ufriends',[\App\Http\Controllers\ProfileController::class,'show_All_users']);
Route::get('/uchat',[\App\Http\Controllers\ProfileController::class,'show_chats']);
Route::get('/ushare',[\App\Http\Controllers\PostsController::class,'show_add_form']);
Route::post('/save_post',[\App\Http\Controllers\PostsController::class,'save_post']);
Route::post('/save_message',[\App\Http\Controllers\ProfileController::class,'save_message']);
Route::get('/test',[\App\Http\Controllers\testing::class,'test']);



Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);
Route::post('/sinupnuemf',[\App\Http\Controllers\register::class,'register_user']);

