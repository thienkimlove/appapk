@extends('main')

@section('content')
<section class="content">
    <!-- Cate begin -->
    <div class="cate">
        <div class="cate-hd">
            <h1 class="cate-title">Categories</h1>
            <a href="{{url('android-'.(!empty($pageGame) ? 'games' : 'apps').'-categories')}}" class="more">More</a>
        </div>
        <div class="cate-bd">
            <ul>
                @foreach ($categories  as $category)
                <li>
                    <a href="{{url('android/top-'.$category->slug.'-'.$category->type)}}" class="j-press">
                        <img alt="{{$category->name}}" src="{{url('images/categories/', $category->icon)}}" class="icon-cate">
                        <p class="name">{{$category->name}}</p>
                    </a>
                </li>
                @endforeach

                <li>
                    <a href="{{url('android-'.(!empty($pageGame) ? 'games' : 'apps').'-categories')}}" class="j-press">
                        <span class="icon-cate icon-more-cate"></span>
                        <img alt="Picture" src="{{url('files/more-cate.png')}}" class="icon-cate">
                        <p class="name">more</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="panel">
    <h1 class="panel-title hr">Hot Apps</h1>
    <!-- List begin -->
    <div class="list-wrap">
        <ul class="list">
            @include('partials.list', ['games' => $games])
        </ul>
    </div>
</div>
{!! with(new \App\Pagination\AcmesPresenter($games))->render() !!}
@endsection