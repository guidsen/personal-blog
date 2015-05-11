<?php namespace App\Http\Controllers;

use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->get();
        return view('feed')->withPosts($posts);
    }

    public function show($slug)
    {
        $post = Post::published()->whereSlug($slug)->first();
        return view('post')->withPost($post);
    }

}
