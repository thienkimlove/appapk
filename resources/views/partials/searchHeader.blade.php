<header class="header header-back">
    <div onclick="javascript:history.go(-1)" class="header-l">
        <span class="go-back"><i></i></span>
        <span class="logo"><img alt="AppForAndroidPhone" src="{{url('files/logo.png')}}"></span>
    </div>
    <div class="header-m">
        <h1>@if (!empty($page)) {{$page}} @endif</h1>
    </div>
    <div class="header-r">
        @if (!empty($page))
        <a class="icon-search" href="{{url('search')}}"></a>
        @endif
        <a href="{{url('/')}}" class="icon-home"></a>
    </div>
</header>