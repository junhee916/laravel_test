<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'user_id' => $request->user()->id,
            'blog_id' => $request->blog_id,
            'body' => $request->body,
        ]);

        return redirect()->back();
    }
}
