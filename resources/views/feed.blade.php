@extends('template')

@section('title', 'A blog written by Guido Schmitz')
@section('description', '
On this blog I will regularly post items about my experiences with Laravel and Lumen.
You can also find items regarding the latest coding trends.
If you want to be up to date, this blog should cover your needs!
')

@section('content')

    <div class="posts-container">
        @foreach($posts as $post)
            <article class="post">
                <section class="post-heading">
                    <h2 class="post-title">
                        <a href="{{ route('post.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                    </h2>

                    <div class="post-info">{{ $post->created_at }}</div>
                </section>
                <section class="post-content">
                    {!! $post->excerpt !!}

                    <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="read-more">Read more</a>
                </section>
            </article>
        @endforeach
    </div>

@stop