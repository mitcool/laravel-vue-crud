<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CategoryController;

Route::apiResource('posts',PostController::class);
Route::get('categories',[CategoryController::class,'index']);
