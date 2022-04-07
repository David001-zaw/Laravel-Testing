<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Posts extends Component
{
    public $posts;

    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    public function formatContent($content)
    {
        return substr($content, 0, 200).' <a href="">..... Read More</a>';
    }


    public function render()
    {
        return view('components.posts');
    }
}
