<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        info(Post::find(2)->category);
        return PostResource::collection(Post::with('category')->paginate(10));
    }
}
