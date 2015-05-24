@extends('app')

@section('content')
    <h1>Create Article</h1>
    <hr>
    {!! Form::model($article = new \App\Article ,['url' => 'articles']) !!}
     @include('articles.form', ['submitButtonText' => 'Create Article'])
    {!! Form::close() !!}
    @include('errors.list')
@stop