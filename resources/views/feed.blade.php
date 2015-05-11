@extends('template')

@section('content')

    <section class="posts-container">
        @foreach($posts as $post)
            <article class="post">
                <div class="post-heading">
                    <h2 class="post-title">
                        <a href="{{ route('post.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                    </h2>

                    <div class="post-info">{{ $post->created_at }}</div>
                </div>
                <div class="post-content">
                    {!! $post->html_body !!}
                </div>
            </article>
        @endforeach
    </section>

@stop