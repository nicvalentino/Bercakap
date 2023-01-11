<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikepostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DislikepostController;
use App\Http\Controllers\LikecommentController;
use App\Http\Controllers\DislikecommentController;
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


Route::get('/profil', [UserController::class, 'index']);
Route::get('/profil/{user:id}/setting', [UserController::class, 'edit']);
Route::put('/profil/{user:id}/edit', [UserController::class, 'update']);

Route::get('/tentang', function () {
    return view('Tentang', [
        'isLoggedIn' => Auth::check(),
        'user' => Auth::user()
    ]);
});

Route::get('/temp', function () {
    return view('Postingan1(2)', [
        'isLoggedIn' => Auth::check(),
        'user' => Auth::user()
    ]);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{post:id}', [PostController::class, 'show']);
Route::get('/post/{post:id}/edit', [PostController::class, 'edit']);
Route::put('/post/{post:id}/edit', [PostController::class, 'update']);
Route::delete('/post/{post:id}/delete', [PostController::class, 'destroy']);
Route::post('/post/like', [LikepostController::class, 'store']);
Route::post('/post/dislike', [DislikepostController::class, 'store']);


Route::post('/post/comment', [CommentController::class , 'store']);
Route::post('/post/comment/like', [LikecommentController::class , 'store']);
Route::post('/post/comment/dislike', [DislikecommentController::class , 'store']);
Route::delete('/post/comment/{comment:id}/delete', [CommentController::class , 'destroy']);
Route::get('/post/comment/{comment:id}/edit', [CommentController::class , 'edit']);
Route::put('/post/comment/{comment:id}/edit', [CommentController::class , 'update']);






Route::get('/forum', [ForumController::class , 'index']);
Route::delete('/forum/{pertanyaan:id}/delete', [ForumController::class, 'destroy']);
Route::get('/ask', [ForumController::class , 'create']);
Route::post('/ask', [ForumController::class , 'store']);