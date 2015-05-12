@extends('template')

@section('title', $post->title)
@section('description', $post->description)

@section('content')

    <section class="actions">
        <a href="{{ route('feed') }}" class="btn btn-primary"><i class="fa fa-level-up fa-lg"></i> Back to overview</a>
        @if(Auth::check() && $post->published == 0)
            <a href="{{ route('feed') }}" class="btn btn-danger disabled">Nog niet gepubliceerd</a>
        @endif
    </section>

    <section class="posts-container">
        <article class="post">
            <div class="post-heading">
                <h1 class="post-title">{{ $post->title }}</h1>

                <div class="post-info">{{ $post->created_at }}</div>
            </div>
            <div class="post-content">
                {!! $post->html_body !!}
            </div>
        </article>
    </section>

    <section class="social pull-right">
        <div class="text">Share this post</div>
        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
        <a class="twitter" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}%20at&via=guidsen" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
    </section>

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'guidoschmitzblog';
        var disqus_title = '{{ $post->title }}';
        var disqus_identifier = '{{ $post->disqus_id }}';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var dsq = document.createElement('script');
            dsq.type = 'text/javascript';
            dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments
            powered by Disqus.</a></noscript>
@stop