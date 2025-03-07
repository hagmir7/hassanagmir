<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function list(){
        $posts = Post::latest()->paginate(12);
        return view('post.list', compact('posts'));
    }

    public function show(Post $post){
        $title = $post->title;
        $description = $post->description;
        return view('post.show', compact('post', 'title', 'description'));
    }
}
