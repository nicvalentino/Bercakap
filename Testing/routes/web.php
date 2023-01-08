<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/forum', [ForumController::class , 'index']);
Route::delete('/forum/{pertanyaan:id}/delete', [ForumController::class, 'destroy']);
Route::get('/ask', [ForumController::class , 'create']);
Route::post('/ask', [ForumController::class , 'store']);

Route::post('/forum/comments', [CommentController::class , 'store']);
Route::delete('/forum/comments/{comment:id}/delete', [CommentController::class , 'destroy']);
Route::put('/forum/comments/{comment:id}/edit', [CommentController::class , 'update']);


