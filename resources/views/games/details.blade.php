@extends('main')

@section('search')
    <section class="content">
        <div class="main-info">
            <div class="pic">
                <img class="" src="{{url('images/avatars/', $game->icon)}}" alt="Picture">
            </div>
            <div class="text">
                <p class="name">{{$game->title}}</p>
                <div class="mid">
                    <span class="star-small s8"></span>
                    <span>(47)</span>
                </div>
                <p class="other"><a class="type" href="{{url('/android/top-'.$game->category->slug.'-'.$game->category->type.'s/')}}">{{$game->category->name}}</a> <span>| {{$game->total}}</span></p>
            </div>

            <!-- Have tow buttons -->
            <div class="aside">
                <a href="{{ url('download-free', $game->slug)  }}" class="btn btn-download j-press">Download</a>
            </div>

        </div>

        <div id="scroll" class="screenshot">
            <ul>
                @foreach ($game->captures as $capture)
                <li>
                    <img src="{{url('images/captures/', $capture->name)}}" alt="Picture">
                </li>
                @endforeach
            </ul>
        </div>
        <div class="panel panel-descr" role="foldWrap">
            <h1 class="panel-title">Description</h1>
            <div class="panel-bd" role="foldToggle">
                <p class="text">{!! $game->desc !!}</p>
            </div>
        </div>
        <div class="panel panel-descr" role="foldWrap">
            <h1 class="panel-title">What's New</h1>
            <div class="panel-bd" role="foldToggle">
                <p class="text">{!! $game->news !!}</p>
            </div>
            <div class="panel-ft">
                <span class="toggle j-press" role="foldToggle">More</span>
            </div>
        </div>

        <div class="panel panel-info">
            <h1 class="panel-title">Information</h1>
            <div class="panel-bd">
                <p><span class="label">Update:</span>{{$game->update}}</p>
                <p><span class="label">Version:</span>{{$game->version}}</p>
                <p><span class="label">Requires:</span>{{$game->require}}</p>
            </div>

            <!-- Have tow buttons -->
            <div class="panel-ft">
                <a href="{{url('download-free', $game->slug)}}" class="btn btn-download j-press" >Download</a>
            </div>
        </div>
        <div class="panel panel-rate">
            <h1 class="panel-title">Rate</h1>
            <div class="panel-bd">
                <span class="star star-large">
                    <i class="on"></i>
                    <i class="on"></i>
                    <i class="on"></i>
                    <i class="on"></i>
                    <i class="on"></i>
                </span>
                <p class="rate-num">(47)</p>
                <div class="btn-wrap ">
                    <span class="btn btn-rate">Rate it</span>
                    <span class="btn btn-thanks">Thanks!</span>
                </div>
            </div>
        </div>
        <div class="panel panel-reco">
            <h1 class="panel-title">You may also like</h1>
            <div class="panel-bd">
                <ul class="reco-list">
                    @foreach($relates as $relate)
                    <li class="item">
                        <a class="inner" href="{{url( 'android-'.$relate->type.'/'.$relate->slug)}}">
                            <img class="lazy" src="{{url('images/avatars/', $relate->icon)}}" alt="Picture">
                            <p class="name">{{$relate->title}}</p>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@stop
