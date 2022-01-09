<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Post $post){
        $post = new PostResource($post);
        return view('admin.posts.edit', compact('post'));
    }
}
