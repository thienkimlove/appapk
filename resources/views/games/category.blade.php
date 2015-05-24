@extends('main')

@section('search')
    <section class="content">
        <div class="list-wrap">
            <ul class="list">
               @include('partials.list', ['games' => $games])
             </ul>
        </div>
    </section>
    {!! with(new \App\Pagination\AcmesPresenter($games))->render() !!}
@stop