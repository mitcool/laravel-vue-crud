<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        info(request()->all());
        $orderColumn = request('orderColumn','created_at');
        if(!in_array($orderColumn,['id','title','created_at'])){
            $orderColumn = 'created_at';
        }
        $orderDirection = request('orderDirection','desc');
        if(!in_array($orderDirection,['asc','desc'])){
            $orderDirection = 'desc';
        }
        info($orderDirection);
        $posts = Post::with('category')->when(request('category'),function(Builder $query){
            $query->where('category_id',request('category'));
        })
        ->orderBy($orderColumn,$orderDirection)
        ->paginate(10);
        return PostResource::collection($posts);
    }
}
