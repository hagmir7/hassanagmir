<?php

use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::paginate(4);
    $posts = Post::paginate(3);
    return view('index', compact('posts', 'projects'));
});
