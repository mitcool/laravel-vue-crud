<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CategoryController;

Route::get('posts',[PostController::class,'index']);
Route::get('categories',[CategoryController::class,'index']);
