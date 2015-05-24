@extends('app')

@section('content')
   <h1>List of Articles</h1>

   <hr>

    @foreach($articles as $article)
      <h2><a href="{{ url('/articles/'.$article->id) }}">{{ $article->title  }}</a></h2>

     <p>{{ $article->body  }}</p>
    @endforeach
@stop

