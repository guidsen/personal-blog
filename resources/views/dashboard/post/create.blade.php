@extends('dashboard.template')

@section('content')

    <form method="POST" action="{{route('dashboard.post.store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('dashboard.post._form')

        <input type="submit" class="btn btn-primary pull-right" value="Bericht aanmaken">
    </form>

@stop