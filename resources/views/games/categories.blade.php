@extends('main')

@section('search')
    <section class="content">
        <ul class="cate-list">
            @foreach ($categories as $cate)
            <li class="item">
                <a class="inner j-press" href="{{url('android/top-'.$cate->slug. '-'.$cate->type)}}">
                    <img class="icon-cate" src="{{url('images/categories/', $cate->icon)}}" alt="Picture">

                    <div class="descr">
                        <p class="name">{{$cate->name}}</p>

                        <p class="others">1300+ Apps</p>
                    </div>
                </a>
            </li>
            @endforeach;
        </ul>
    </section>
@stop