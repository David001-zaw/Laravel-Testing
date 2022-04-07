<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('live-search', compact('posts'));
    }

    public function search(Request $request)
    {
        $output = "";

        $posts = Post::where('id', 'LIKE', '%'.$request->search.'%')
                    ->orWhere('title', 'LIKE', '%'.$request->search.'%')->get();

        foreach($posts as $post){
            $output .=
            '
            <tr>
                <td>'. $post->id .'</td>
                <td>'. $post->title .'</td>
            </tr>
            ';
        }


        return response($output);

    }

}
