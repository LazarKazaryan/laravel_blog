<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $posts = PostResource::collection(Post::all());

        return view('admin.posts.index',compact('posts'));
    }
}
