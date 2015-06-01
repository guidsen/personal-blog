<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = (Auth::check()) ? Post::all() : Post::published()->get();

        $posts->map(function ($post) {
            $post->excerpt = Str::words($post->html_body);
            return $post;
        });

        return view('feed')->withPosts($posts);
    }

    public function show($slug)
    {
        $post = (Auth::check()) ? Post::whereSlug($slug)->first() : Post::published()->whereSlug($slug)->first();
        return view('post')->withPost($post);
    }

}
