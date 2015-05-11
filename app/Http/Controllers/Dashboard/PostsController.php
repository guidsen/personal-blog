<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('dashboard.post.index')->withPosts(Post::all());
    }

    public function edit($id)
    {
        return view('dashboard.post.edit')->withPost(Post::find($id));
    }

    public function update(PostRequest $request, $id)
    {
        Post::find($id)->update($request->all());
        return redirect()->route('dashboard.index');
    }

    public function create()
    {
        return view('dashboard.post.create');
    }

    public function store(PostRequest $request)
    {
        $request->merge(['disqus_id' => rand(100000, 999999)]);
        Post::create($request->all());
        return redirect()->route('dashboard.index');
    }
}