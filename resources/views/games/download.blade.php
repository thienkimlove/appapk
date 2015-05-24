@extends('main')

@section('search')
    <section class="content" data-ng-controller="DownloadController">
        <div class="main-info">
            <div class="text">
                <p class="name">Download free "{{$game->title}}"</p>
            </div>
        </div>


        <div class="panel panel-info">
            <h1 class="panel-title">Link download</h1>
            <div class="panel-bd">
                <div class="panel-ft" data-ng-hide="link">
                    <a rel="nofollow" href="javascript:void(0)" data-ng-click="getLink({{$game->id}})" class="btn btn-download j-press" data-ng-show="!loading">Get Link Download</a>
                    <img src="{{url('files/ajax-loading.gif')}}" data-ng-show="loading" />
                </div>

                <div class="panel-ft" data-ng-show="link">
                    <p data-ng-show="google">We can not get direct download link free for this, please go to Store by click below:</p>
                    <a rel="nofollow" data-ng-href="<% link %>" class="btn btn-download j-press">Download</a>
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
