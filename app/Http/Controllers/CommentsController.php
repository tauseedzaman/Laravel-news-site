<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
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
