<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $tags = TagResource::collection(Tag::all());

        return view('admin.tags.index',compact('tags'));
    }
}
