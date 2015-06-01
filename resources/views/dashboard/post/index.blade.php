@extends('dashboard.template')

@section('content')
    <section class="actions">
        <a href="{{ route('dashboard.post.create') }}" class="btn btn-primary pull-right btn-sm">Maak bericht aan <i class="fa fa-plus"></i></a>
    </section>
    <table class="table">
        <thead>
        <tr>
            <th width="50%">Titel</th>
            <th width="20%" class="text-center">Aangemaakt op</th>
            <th width="30%"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    <a href="{{route('dashboard.post.edit', $post->id)}}">{{$post->title}}</a>
                    <span class="label label-info preview"><a href="{{ route('post.show', ['slug' => $post->slug]) }}">Preview</a></span>
                </td>
                <td class="text-center">{{ $post->created_at }}</td>
                <td class="text-right">
                    <span class="label {{ ($post->published) ? 'label-success' : 'label-danger' }}">
                        {{ ($post->published) ? 'Gepubliceerd' : 'Niet gepubliceerd' }}
                    </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop