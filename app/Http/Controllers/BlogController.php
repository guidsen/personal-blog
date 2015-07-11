<?php namespace App\Http\Controllers;

use App\Commands\SubscribeUser;
use App\Http\Requests\SubscribeRequest;
use App\Post;
use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Cache $cache)
    {
        if (Auth::check()) {
            $posts = Post::orderBy('id', 'desc')->get();
        } else {
            $posts = $cache->rememberForever("post.overview", function () {
                return Post::published()->orderBy('id', 'desc')->get();
            });
        }

        $posts->map(function ($post) {
            $post->excerpt = Str::words($post->html_body, 60);
            return $post;
        });

        return view('feed')->withPosts($posts);
    }

    public function show(Cache $cache, $slug)
    {
        if (Auth::check()) {
            $post = Post::whereSlug($slug)->first();
        } else {
            $post = $cache->rememberForever("post-$slug", function () use ($slug) {
                return Post::published()->whereSlug($slug)->first();
            });
        }

        return view('post')->withPost($post);
    }

    public function subscribe(SubscribeRequest $request)
    {
        $this->dispatch(new SubscribeUser($request->input('email')));
        return redirect()->back()->with(['message' => 'Thanks for subscribing to my blog!']);
    }

}
