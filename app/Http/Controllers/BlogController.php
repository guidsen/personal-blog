<?php namespace App\Http\Controllers;

use App\Commands\SubscribeUser;
use App\Http\Requests\SubscribeRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = (Auth::check()) ? Post::orderBy('id', 'desc')->get() : Post::published()->orderBy('id', 'desc')->get();

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

    public function subscribe(SubscribeRequest $request)
    {
        $this->dispatch(new SubscribeUser($request->input('email')));
        return redirect()->back()->with(['message' => 'Thanks for subscribing to my blog!']);
    }

}
