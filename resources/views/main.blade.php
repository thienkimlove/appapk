<!DOCTYPE html>
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('files/favicon.ico') }}">

    <title>{{ $title }}</title>
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="579103738859108">
    <meta property="og:title" content="{{ $title  }}">
    <meta property="og:image" content="{{ url('files/9apps_present.png')  }}">
    <meta name="description" content="{{$desc}}">
    <meta name="keywords" content="{{$keyword}}">
    <link rel="alternate" href="http://appforandroidphone.com" hreflang="en" />
    <link href="{{ url('css/'.$css.'.css')  }}" rel="stylesheet">

    </head>
<body data-ng-app="Application">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@if (empty($pageSearch) && empty($page))
<section id="mainContainer" class="main-container">
    <!-- Header begin -->
    @include('partials.header')
    <!-- Header end -->
    <!-- Nav begin -->

    <nav class="nav has-dropdown">
        <ul class="nav-list">
            <li class="item {{ !empty($pageHome)? 'active' : '' }}">
                <a href="{{url('/')}}">HOME</a>
            </li>
            <li class="item {{ !empty($pageApp)? 'active' : '' }}">
                <a href="{{url('android-apps')}}">APPS</a>
            </li>
            <li class="item {{ !empty($pageGame)? 'active' : '' }}">
                <a href="{{url('android-games')}}">GAMES</a>
            </li>
        </ul>
    </nav>
    <!-- Nav end -->

    @yield('content')

    <!-- Footer begin -->
    @include('footer')
    <!-- Footer end -->

</section>

<section id="searchWrap" class="search-wrap hide">
    <header class="header header-back">
        <div id="hideSearch" class="header-l">
            <span class="go-back"><i></i></span>
            <span class="logo"><img src="{{url('files/logo.png')}}" alt="AppForAndroidPhone"></span>
        </div>
        <div class="header-r">
            <a class="icon-home" href="{{url('/')}}"></a>
        </div>
    </header>

    <section class="search-content">
        <!-- search-combox begin -->
        @include('partials.endsearch')
        <!-- search-combox end -->
        <div class="hot-keywords">
            <h1>Weekly Hot Words</h1>
            <ul>
                @foreach ($hotTags as $tag)
                    <li>
                        <a class="j-press" href="{{url('search/tag-'.str_replace(' ', '-', $tag['name']))}}">{{ $tag['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</section>

@else
  @include('partials.searchHeader', ['page' => $page])
  @yield('search')
  @include('footer')
@endif
<script>
    var Config = {};
    Config.url = '{{ url('/') }}';
    Config.keyword = '{{ !empty($term) ? $term : $hotTags[array_rand($hotTags)]['name'] }}';
</script>
<script type="text/javascript" src="{{url('js/output.js')}}"></script>
<script type="text/javascript" src="{{url('js/custom.js')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60393562-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>