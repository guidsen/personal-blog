@extends('dashboard.template')

@section('content')

    <form method="POST" action="{{route('dashboard.post.update', ['id' => $post->id])}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('dashboard.post._form', $post)

        <input type="submit" class="btn btn-primary pull-right" value="Bericht wijzigen">
    </form>

@stop