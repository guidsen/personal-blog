@extends('template')

@section('title', 'A blog written by Guido Schmitz')
@section('description', '
On this blog I will regularly post items about my experiences with Laravel and Lumen.
You can also find items regarding the latest coding trends.
If you want to be up to date, this blog should cover your needs!
')

@section('content')
    <div class="newsletter-wrapper">
        <h3 class="title">Stay up to date</h3>

        <div class="row">
            <form method="POST" action="{{ url('/subscribe') }}" class="col-md-6 newsletter-signup-form">
                {!! $errors->first('email', '
                <div class="alert alert-danger">:message</div>
                ') !!}
                @if(session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="input-group">
                    <input type="text" name="email" class="form-control" placeholder="Enter your email address.." required>
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Sign up</button>
                  </span>
                </div>
            </form>
        </div>
    </div>
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