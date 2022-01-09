<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $req){
        $data = $req->validated();

        Tag::firstOrCreate($data);

        return redirect()->route('admin.tags.index');
    }
}
