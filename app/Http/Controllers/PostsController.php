<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
        public function index()
        {
                $posts = Post::latest()->get();
                return view('posts.index', compact('posts'));
        }

        public function create()
        {
                return view('posts.create');
        }

        public function store()
        {
                $this->validate(request(), [
                        'title' => 'required',
                        'author' => 'required',
                        'body' => 'required'
                ]);

                $data = array(
                        'title' => request('title'),
                        'author' => request('author'),
                        'body' => request('body'),
                        'ip' => request()->ip()
                );

                Post::create($data);
                return redirect('/posts');
        }

        public function show(Post $post)
        {
                return view('posts.show', compact('post'));
        }
}
