<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\comments;
use App\Models\posts;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function show($post_id)
    {
        return json_encode(comments::where('post_id',$post_id)->latest()->with('user')->get());
    }
    public function store(Request $request)
    {
        $request->validate([
            'comment' => ['required'],
        ]);

        $user = comments::create([
            'post_id' => $request->post_id,
            'user_id' => auth()->id(),
            'content' => $request->comment,
        ]);
        return redirect()->back();
    }
}
