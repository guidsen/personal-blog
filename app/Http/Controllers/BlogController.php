<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $posts = (Auth::check()) ? Post::all() : Post::published()->get();
        return view('feed')->withPosts($posts);
    }

    public function show($slug)
    {
        $post = (Auth::check()) ? Post::whereSlug($slug)->first() : Post::published()->whereSlug($slug)->first();
        return view('post')->withPost($post);
    }

}
