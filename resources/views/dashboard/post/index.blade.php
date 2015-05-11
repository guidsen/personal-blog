@extends('dashboard.template')

@section('content')
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
                    <span class="label label-info"><a href="#">Preview</a></span>
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