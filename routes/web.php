<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Route::get('/', [IndexController::class , "index"]);
Route::get('/about', [IndexController::class , "about"]);
Route::get('/contact', [IndexController::class , "contact"]);
Route::get('/job', [JobController::class,"index"]);

Route::get('/comments', [CommentController::class,"index"]);
Route::get('/comments/create', [CommentController::class,"create"]);

Route::get('/blog', [PostController::class,"index"]);
Route::get('/blog/create', [PostController::class,"create"]);
Route::get('/blog/delete/{id}', [PostController::class,"delete"]);
Route::get('/blog/{id}', [PostController::class,"show"]);

Route::get("/tags", [TagController::class, "index"]);
Route::get("/tags/create", [TagController::class, "create"]);
Route::get("/tags/testManyToMany", [TagController::class, "testManyToMany"]);
Route::get("/tags/display", [TagController::class, "displayAllTags"]);
