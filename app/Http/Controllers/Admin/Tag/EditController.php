<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Tag $tag){
        $tag = new TagResource($tag);
        return view('admin.tags.edit', compact('tag'));
    }
}
