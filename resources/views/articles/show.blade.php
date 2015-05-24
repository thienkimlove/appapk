@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>

    <p>{{ $article->body }}</p>

    @unless ($article->tags->isEmpty())
    <h5>Tags</h5>

    <ul>
        @foreach ($article->tags as $tag)
            <li><a href="{{ url('tags', $tag->name) }}">{{ $tag->name  }}</a></li>
        @endforeach
    </ul>
    @endunless
@stop