<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->take(3)->get();

        $data = [
            'posts' => $posts,
        ];

        return view('AdminLTE.news.index', $data);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data = [
            'post' => $post,
        ];

        return view('AdminLTE.news.show', $data);
    }

}
