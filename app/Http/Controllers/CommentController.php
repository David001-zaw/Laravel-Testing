<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back()->with('success', 'Commented Successfully');
    }

    public function replyStore(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $reply = new Comment();
        $reply->comment = $request->comment;
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back()->with('success', 'Replied Successfully');

    }

    public function delete($id)
    {
        $comment = Comment::where('id', $id)->orWhere('parent_id', $id)->get();
        // dd($comment);
        Comment::destroy($comment);

        return back()->with('success', 'Comment Deleted Successfully');
    }
}
