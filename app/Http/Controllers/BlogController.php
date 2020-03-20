<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'user'       => Auth()->user(),
            'categories' => Category::all(),
            'tags'       => Tag::all()
        ]);
    }

    public function detail($id)
    {
        $post = Post::findOrFail($id);

        return view('detail', [
            'user' => Auth()->user(),
            'post' => $post
        ]);
    }
}
