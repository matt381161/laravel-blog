<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
class CommentsController extends Controller
{
    //
    public function store($id){
        if(auth()->check()) {
            Comment::create([
                'post_id' => $id,
                'body' => request('body'),
                'user_id' => auth()->id()
            ]);
        }
        return back();
    }
}
