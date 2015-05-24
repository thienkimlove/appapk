<header class="header">
    <a class="logo" href="{{url('/')}}"><img src="{{ url('files/logo.png') }}" alt="AppForAndroidPhone"></a>
    <div class="fb-like" data-href="http://appforandroidphone.com/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    <div id="search" class="search-bar" data-ng-controller="SearchController">
        <form class="search-form" novalidate>
            <input data-ng-model="keyword" name="keyword" placeholder="Enter Keywords" autocomplete="off" type="hidden">
            <div id="searchPlaceholder" class="search-input">
                <input data-ng-focus="displayEndSearch()" data-ng-model="keyword" name="keyword" placeholder="Enter Keywords" readonly="readonly" type="text">
            </div>
            <button type="button" class="search-submit" data-ng-click="goSearch()"><i></i>Search</button>
            <button type="button" class="search-cancel" data-ng-click="cancel()">Cancel</button>
        </form>
    </div>
</header>