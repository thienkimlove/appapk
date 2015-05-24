@extends('main')

@section('content')
    <section class="content">
        <!-- Banner begin -->
        <!-- Banner end -->

        <!-- Index nav begin -->
        <div class="index-nav">
            <!--
            <ul>
                <li class="new">
                    <a href="{{url('new-android-apps')}}">New
                        <i class="badge">142</i> </a>
                </li>
                <li class="top">
                    <a href="{{url('top-android-apps')}}">Top</a>
                </li>
                <li class="special">
                    <a href="{{url('special')}}">Specials</a>
                </li>
            </ul>
            -->
        </div>
        <!-- Index nav end -->

        <!--
        <a class="ajaxtips" href="{{url('help')}}">How to Download apk files
            directly?<span class="go">GO</span></a>
         -->
        <div id="refresh" class="list-wrap">
            <ul id="refreshList" class="list bt">
                @include('partials.list', ['games' => $games])
            </ul>
            <div id="refreshTip" class="refresh-tip"><span class="end">The End</span></div>
        </div>
    </section>

@stop
