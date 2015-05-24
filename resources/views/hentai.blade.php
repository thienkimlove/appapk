<html lang="en" data-ng-app="Application" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
    <title data-ng-bind="$root.title" class="ng-binding">Watch Free Anime Hentai Video Streams - Search</title>
    <meta charset="UTF-8">
    <meta content="!" name="fragment">
    <meta content="width=device-width, initial-scale=0.5" name="viewport">
    <meta content="Watch free anime hentai video streams for your mobile phone, tablet, desktop, in 720p and 1080p. We regularly update with the latest HD releases: uncensored, subbed, 720p, 1080p, and more!" name="description">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="JAdtjIlmsZoat+RfUWRApebs0H1fy3nS+MdY+TB6ukA=">
    <link type="image/x-icon" href="/favicon.ico" rel="icon">
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" media="all" href="http://static.freeanimehentai.net/assets/vendors-84404c02d03b7f96b54dfdce50cfd270.css">
    <link rel="stylesheet" media="all" href="http://static.freeanimehentai.net/assets/application-aaeae4b08f0d10fb4a0e404760e0beca.css">



</head>
<body class="full-height ng-scope" data-ng-controller="AnalyticsController" style="">

<!-- uiView:  --><div data-ui-view="" class="full-height ng-scope" data-ng-controller="BaseController"><section data-ng-controller="HomeController" class="home full-height ng-scope">

        <nav class="navbar navbar-fixed-top frosted-glass">
            <div class="brightener">
                <div class="max-width-lg relative">
                    <div class="navbar-header">

                        <!-- LOGO/BRANDING -->
                        <div class="navbar-brand">
                            <a data-ui-sref="home.videos" href="/">
                                <img alt="Free Anime Hentai HD Stream for Mobile" src="http://www.freeanimehentai.net/images/logo-100.png" class="logo vertical-align">
                            </a>
                        </div>
                        <!-- /LOGO/BRANDING -->

                        <div class="navbar-left">
                            <ul class="nav navbar-nav">
                                <li class="navbar-left">
                                    <a data-ng-class="{active: $state.includes('home.videos')}" data-ui-sref="home.videos" href="/" class="active" style="">
                                        HENTAI
                                    </a>
                                </li>
                                <li class="navbar-left">
                                    <a target="_blank" href="http://www.animeraven.com">
                                        ANIME
                                    </a>
                                </li>
                                <!--               <li class="navbar-left">
                                                <a data-ui-sref="home.shop" data-ng-class="{active: $state.includes('home.shop')}">
                                                  Shop
                                                </a>
                                              </li> -->
                                <li class="navbar-left">
                                    <a data-ng-class="{active: $state.includes('home.news')}" data-ui-sref="home.news" href="/news">
                                        News
                                    </a>
                                </li>
                                <!--               <li class="navbar-left">
                                                <a data-ui-sref="home.ads" data-ng-class="{active: $state.includes('home.ads')}">
                                                  Ads
                                                </a>
                                              </li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- GUEST USERS -->
                    <!-- ngIf: !current_user --><div data-ng-if="!current_user" class="service ng-scope">
                        <div class="service-welcome">
                            <a data-ui-sref-active="active" data-ui-sref="home.login" class="service-welcome-log-in" href="/login">Log in</a>
                            <span class="or">or</span>
                            <a data-ui-sref-active="active" data-ui-sref="home.signUp" class="service-welcome-create-account" href="/sign-up">Create an Account</a>
                        </div>
                    </div><!-- end ngIf: !current_user -->
                    <!-- /GUEST USERS -->

                    <!-- LOGGED IN USERS -->
                    <!-- ngIf: current_user -->
                    <!-- /LOGGED IN USERS -->

                </div>
            </div>
        </nav>

        <!-- SUB NAVBAR -->
        <nav class="navbar navbar-sub navbar-fixed-top frosted-glass">
            <div class="brightener">
                <div class="max-width-lg full-height relative">

                    <!-- SOCIAL LINKS -->
                    <div class="social pull-right vertical-align">
          <span data-target="#contact_us_modal" data-toggle="modal" class="social-link contact-us-link pull-right">
            <em class="fa fa-life-ring fa-lg"></em>
            PROBLEM?
          </span>

                        <a target="_blank" href="https://www.facebook.com/hanime.tv" class="social-link pull-right">
                            <em class="fa fa-facebook fa-lg"></em>
                        </a>

                        <a target="_blank" href="https://twitter.com/HanimeTv" class="social-link pull-right">
                            <em class="fa fa-twitter fa-lg"></em>
                        </a>

                        <!-- CREEPER STALKER -->
                        <div class="social-link pull-right vertical-align">
                            <span data-ng-bind="active_users_text" class="ng-binding">0</span>
                            <em class="fa fa-users fa-lg"></em>
                        </div>
                        <!-- /CREEPER STALKER -->
                    </div>
                    <!-- /SOCIAL LINKS -->

                    <!-- TICKER UPDATES -->

                    <!-- TICKER UPDATES -->

                </div>
            </div>
        </nav>
        <!-- /SUB NAVBAR -->

        <!-- uiView:  --><div class="full-height fade-in-animation ng-scope" data-ui-view=""><div data-ng-controller="HomeVideosController" class="relative full-height ng-scope">

                <!-- uiView:  --><div class="full-height fade-in-animation ng-scope" data-ui-view=""><div data-ng-controller="SearchController" class="search pane ng-scope">
                        <div time-threshold="100" scroll-threshold="700" lr-infinite-scroll="loadMore" class="pane-content full-height">

                            <div class="videos-list relative">
                                <input placeholder="examples: uncensored, swimsuit, Kuroinu" data-ng-model="search_text" data-ng-change="search()" id="search_input" class="input-search ng-pristine ng-valid" kl_virtual_keyboard_secure_input="on">

                                <div class="result-count-container">
                                    <span data-ng-bind="search_result.nbHits" class="result-count-text ng-binding">47</span> results
                                </div>

                                <div class="row">
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-3"><div class="divider"></div></div>
                                    <div class="col-xs-1 text-center or">OR</div>
                                    <div class="col-xs-3"><div class="divider"></div></div>
                                    <div class="col-xs-3"></div>
                                </div>

                                <div class="tags filter-tags clearfix">
                                    <!-- ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">censored</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">modern</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">creampie</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">blowjob</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope active">uncensored</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope active">rape</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">foreplay</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">bondage</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">magic</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">group sex</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">pov</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">exhibitionist</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">boobjob</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">anal</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">yuri</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">virgin</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">harem</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">fantasy</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">masturbation</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">threesome</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">incest</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">maid</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">nurse</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">futa</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">lingerie</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">foursome+</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">swimsuit</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">cosplay</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">ntr</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags --><span data-ng-click="toggleFilterHentaiTag(hentai_tag, $event)" data-ng-bind="hentai_tag.text" data-ng-class="{'active': active_filter_hentai_tags.indexOf(hentai_tag.text) &gt; -1}" data-ng-repeat="hentai_tag in visible_filter_hentai_tags" class="tag pull-left ng-binding ng-scope">swallow</span><!-- end ngRepeat: hentai_tag in visible_filter_hentai_tags -->
                                    <!-- ngIf: visible_filter_hentai_tags.length != all_hentai_tags.length --><span data-ng-if="visible_filter_hentai_tags.length != all_hentai_tags.length" data-ng-click="showAllHentaiTags()" class="tag tag-transparent pull-left ng-scope">
          SHOW MORE
        </span><!-- end ngIf: visible_filter_hentai_tags.length != all_hentai_tags.length -->
                                </div>

                                <!-- SEARCH RESULTS -->
                                <!-- ngRepeat: video in search_result_videos --><div data-ng-repeat="video in search_result_videos" class="clearfix ng-scope">
                                    <div data-ng-bind="($index+1)" class="ordinal-label pull-left ng-binding">1</div>
                                    <div class="pull-left search-item">
                                        <div class="favorite-container fade-in-animation relative">
                                            <a class="favorite favorite-has-action-button relative" data-ui-sref="home.video({video_slug: video.slug})" href="/videos/slave-nurses-1">
                                                <img alt="Slave Nurses 1 cover image" src="//static.freeanimehentai.net/cover-images/hentai/slave-nurses-1.jpg" data-ng-src="//static.freeanimehentai.net/cover-images/hentai/slave-nurses-1.jpg" class="pull-left">

                                                <div class="hidden-xs pull-left stats clearfix">
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.views" class="ng-binding">6566</span> <em class="fa fa-eye"></em>
                                                    </div>
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.interests" class="ng-binding">13802</span> <em class="fa fa-bar-chart"></em>
                                                    </div>
                                                </div>

                                                <div class="pull-left favorite-title-container">
                                                    <div data-ng-bind="video.name" class="favorite-title ng-binding">Slave Nurses 1</div>

                                                    <div class="favorite-subtitles">
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 --><div class="subtitles ng-scope" data-ng-if="!video.is_hard_subtitled &amp;&amp; video.hentai_video_subtitles.length &gt; 0">
                                                            <span class="key-term">Subtitled</span> in
                                                            <!-- ngRepeat: sub in video.hentai_video_subtitles --><span data-ng-repeat="sub in video.hentai_video_subtitles" data-ng-bind="sub.label" class="subtitle ng-binding ng-scope">English</span><!-- end ngRepeat: sub in video.hentai_video_subtitles -->
                                                        </div><!-- end ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 -->
                                                        <!-- ngIf: video.is_hard_subtitled -->
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length == 0 -->
                                                    </div>

                                                    <!-- TAGS -->
                                                    <div class="tags tags-xs clearfix">
                                                        <!-- ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">modern</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">harem</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">bondage</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">foreplay</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">blowjob</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">masturbation</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">rape</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">anal</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">sex toys</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">voyeur</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">drugged</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">nurse</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">uncensored</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags -->
                                                    </div>
                                                    <!-- /TAGS -->

                                                </div>
                                            </a>

                                            <!-- FAVORITE BUTTON -->
                                            <button title="Toggle Favorite" data-placement="left" data-toggle="tooltip" data-ng-click="toggleHentaiVideoFavorite(video)" class="favorite-button action-button pull-right button-toggle">
                                                <em data-ng-class="{'fa-heart active': userFavoritedVideo(video), 'fa-heart-o': !userFavoritedVideo(video)}" class="fa fa-2x fa-heart-o"></em>
                                            </button>
                                            <!-- FAVORITE BUTTON -->

                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: video in search_result_videos --><div data-ng-repeat="video in search_result_videos" class="clearfix ng-scope">
                                    <div data-ng-bind="($index+1)" class="ordinal-label pull-left ng-binding">2</div>
                                    <div class="pull-left search-item">
                                        <div class="favorite-container fade-in-animation relative">
                                            <a class="favorite favorite-has-action-button relative" data-ui-sref="home.video({video_slug: video.slug})" href="/videos/ryoujoku-famiresu-choukyou-menu-1">
                                                <img alt="Ryoujoku Famiresu Choukyou Menu 1 cover image" src="//static.freeanimehentai.net/cover-images/hentai/ryoujoku-famiresu-choukyou-menu-1.jpg" data-ng-src="//static.freeanimehentai.net/cover-images/hentai/ryoujoku-famiresu-choukyou-menu-1.jpg" class="pull-left">

                                                <div class="hidden-xs pull-left stats clearfix">
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.views" class="ng-binding">17068</span> <em class="fa fa-eye"></em>
                                                    </div>
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.interests" class="ng-binding">31003</span> <em class="fa fa-bar-chart"></em>
                                                    </div>
                                                </div>

                                                <div class="pull-left favorite-title-container">
                                                    <div data-ng-bind="video.name" class="favorite-title ng-binding">Ryoujoku Famiresu Choukyou Menu 1</div>

                                                    <div class="favorite-subtitles">
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 --><div class="subtitles ng-scope" data-ng-if="!video.is_hard_subtitled &amp;&amp; video.hentai_video_subtitles.length &gt; 0">
                                                            <span class="key-term">Subtitled</span> in
                                                            <!-- ngRepeat: sub in video.hentai_video_subtitles --><span data-ng-repeat="sub in video.hentai_video_subtitles" data-ng-bind="sub.label" class="subtitle ng-binding ng-scope">English</span><!-- end ngRepeat: sub in video.hentai_video_subtitles -->
                                                        </div><!-- end ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 -->
                                                        <!-- ngIf: video.is_hard_subtitled -->
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length == 0 -->
                                                    </div>

                                                    <!-- TAGS -->
                                                    <div class="tags tags-xs clearfix">
                                                        <!-- ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">censored</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">modern</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">ntr</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">blackmail</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">creampie</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">virgin</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">foreplay</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">blowjob</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">rape</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">maid</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">pervert</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">uncensored</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags -->
                                                    </div>
                                                    <!-- /TAGS -->

                                                </div>
                                            </a>

                                            <!-- FAVORITE BUTTON -->
                                            <button title="Toggle Favorite" data-placement="left" data-toggle="tooltip" data-ng-click="toggleHentaiVideoFavorite(video)" class="favorite-button action-button pull-right button-toggle">
                                                <em data-ng-class="{'fa-heart active': userFavoritedVideo(video), 'fa-heart-o': !userFavoritedVideo(video)}" class="fa fa-2x fa-heart-o"></em>
                                            </button>
                                            <!-- FAVORITE BUTTON -->

                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: video in search_result_videos --><div data-ng-repeat="video in search_result_videos" class="clearfix ng-scope">
                                    <div data-ng-bind="($index+1)" class="ordinal-label pull-left ng-binding">3</div>
                                    <div class="pull-left search-item">
                                        <div class="favorite-container fade-in-animation relative">
                                            <a class="favorite favorite-has-action-button relative" data-ui-sref="home.video({video_slug: video.slug})" href="/videos/night-shift-nurses-kranke-1">
                                                <img alt="Night Shift Nurses - Kranke 1 cover image" src="//static.freeanimehentai.net/cover-images/hentai/night-shift-nurses-kranke-1.jpg" data-ng-src="//static.freeanimehentai.net/cover-images/hentai/night-shift-nurses-kranke-1.jpg" class="pull-left">

                                                <div class="hidden-xs pull-left stats clearfix">
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.views" class="ng-binding">20382</span> <em class="fa fa-eye"></em>
                                                    </div>
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.interests" class="ng-binding">35273</span> <em class="fa fa-bar-chart"></em>
                                                    </div>
                                                </div>

                                                <div class="pull-left favorite-title-container">
                                                    <div data-ng-bind="video.name" class="favorite-title ng-binding">Night Shift Nurses - Kranke 1</div>

                                                    <div class="favorite-subtitles">
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 --><div class="subtitles ng-scope" data-ng-if="!video.is_hard_subtitled &amp;&amp; video.hentai_video_subtitles.length &gt; 0">
                                                            <span class="key-term">Subtitled</span> in
                                                            <!-- ngRepeat: sub in video.hentai_video_subtitles --><span data-ng-repeat="sub in video.hentai_video_subtitles" data-ng-bind="sub.label" class="subtitle ng-binding ng-scope">English</span><!-- end ngRepeat: sub in video.hentai_video_subtitles -->
                                                        </div><!-- end ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 -->
                                                        <!-- ngIf: video.is_hard_subtitled -->
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length == 0 -->
                                                    </div>

                                                    <!-- TAGS -->
                                                    <div class="tags tags-xs clearfix">
                                                        <!-- ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">modern</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">rape</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">anal</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">nurse</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">bdsm</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">uncensored</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags -->
                                                    </div>
                                                    <!-- /TAGS -->

                                                </div>
                                            </a>

                                            <!-- FAVORITE BUTTON -->
                                            <button title="Toggle Favorite" data-placement="left" data-toggle="tooltip" data-ng-click="toggleHentaiVideoFavorite(video)" class="favorite-button action-button pull-right button-toggle">
                                                <em data-ng-class="{'fa-heart active': userFavoritedVideo(video), 'fa-heart-o': !userFavoritedVideo(video)}" class="fa fa-2x fa-heart-o"></em>
                                            </button>
                                            <!-- FAVORITE BUTTON -->

                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: video in search_result_videos --><div data-ng-repeat="video in search_result_videos" class="clearfix ng-scope">
                                    <div data-ng-bind="($index+1)" class="ordinal-label pull-left ng-binding">4</div>
                                    <div class="pull-left search-item">
                                        <div class="favorite-container fade-in-animation relative">
                                            <a class="favorite favorite-has-action-button relative" data-ui-sref="home.video({video_slug: video.slug})" href="/videos/night-shift-nurses-karte-9">
                                                <img alt="Night Shift Nurses - Karte 9 cover image" src="//static.freeanimehentai.net/cover-images/hentai/night-shift-nurses-karte-9.jpg" data-ng-src="//static.freeanimehentai.net/cover-images/hentai/night-shift-nurses-karte-9.jpg" class="pull-left">

                                                <div class="hidden-xs pull-left stats clearfix">
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.views" class="ng-binding">5323</span> <em class="fa fa-eye"></em>
                                                    </div>
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.interests" class="ng-binding">14235</span> <em class="fa fa-bar-chart"></em>
                                                    </div>
                                                </div>

                                                <div class="pull-left favorite-title-container">
                                                    <div data-ng-bind="video.name" class="favorite-title ng-binding">Night Shift Nurses - Karte 9</div>

                                                    <div class="favorite-subtitles">
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 --><div class="subtitles ng-scope" data-ng-if="!video.is_hard_subtitled &amp;&amp; video.hentai_video_subtitles.length &gt; 0">
                                                            <span class="key-term">Subtitled</span> in
                                                            <!-- ngRepeat: sub in video.hentai_video_subtitles --><span data-ng-repeat="sub in video.hentai_video_subtitles" data-ng-bind="sub.label" class="subtitle ng-binding ng-scope">English</span><!-- end ngRepeat: sub in video.hentai_video_subtitles -->
                                                        </div><!-- end ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 -->
                                                        <!-- ngIf: video.is_hard_subtitled -->
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length == 0 -->
                                                    </div>

                                                    <!-- TAGS -->
                                                    <div class="tags tags-xs clearfix">
                                                        <!-- ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">modern</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">rape</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">nurse</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">uncensored</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags -->
                                                    </div>
                                                    <!-- /TAGS -->

                                                </div>
                                            </a>

                                            <!-- FAVORITE BUTTON -->
                                            <button title="Toggle Favorite" data-placement="left" data-toggle="tooltip" data-ng-click="toggleHentaiVideoFavorite(video)" class="favorite-button action-button pull-right button-toggle">
                                                <em data-ng-class="{'fa-heart active': userFavoritedVideo(video), 'fa-heart-o': !userFavoritedVideo(video)}" class="fa fa-2x fa-heart-o"></em>
                                            </button>
                                            <!-- FAVORITE BUTTON -->

                                        </div>
                                    </div>
                                </div><!-- end ngRepeat: video in search_result_videos --><div data-ng-repeat="video in search_result_videos" class="clearfix ng-scope">
                                    <div data-ng-bind="($index+1)" class="ordinal-label pull-left ng-binding">5</div>
                                    <div class="pull-left search-item">
                                        <div class="favorite-container fade-in-animation relative">
                                            <a class="favorite favorite-has-action-button relative" data-ui-sref="home.video({video_slug: video.slug})" href="/videos/night-shift-nurses-karte-8">
                                                <img alt="Night Shift Nurses - Karte 8 cover image" src="//static.freeanimehentai.net/cover-images/hentai/night-shift-nurses-karte-8.jpg" data-ng-src="//static.freeanimehentai.net/cover-images/hentai/night-shift-nurses-karte-8.jpg" class="pull-left">

                                                <div class="hidden-xs pull-left stats clearfix">
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.views" class="ng-binding">4706</span> <em class="fa fa-eye"></em>
                                                    </div>
                                                    <div class="stat pull-left">
                                                        <span data-ng-bind="video.interests" class="ng-binding">12898</span> <em class="fa fa-bar-chart"></em>
                                                    </div>
                                                </div>

                                                <div class="pull-left favorite-title-container">
                                                    <div data-ng-bind="video.name" class="favorite-title ng-binding">Night Shift Nurses - Karte 8</div>

                                                    <div class="favorite-subtitles">
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 --><div class="subtitles ng-scope" data-ng-if="!video.is_hard_subtitled &amp;&amp; video.hentai_video_subtitles.length &gt; 0">
                                                            <span class="key-term">Subtitled</span> in
                                                            <!-- ngRepeat: sub in video.hentai_video_subtitles --><span data-ng-repeat="sub in video.hentai_video_subtitles" data-ng-bind="sub.label" class="subtitle ng-binding ng-scope">English</span><!-- end ngRepeat: sub in video.hentai_video_subtitles -->
                                                        </div><!-- end ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length > 0 -->
                                                        <!-- ngIf: video.is_hard_subtitled -->
                                                        <!-- ngIf: !video.is_hard_subtitled && video.hentai_video_subtitles.length == 0 -->
                                                    </div>

                                                    <!-- TAGS -->
                                                    <div class="tags tags-xs clearfix">
                                                        <!-- ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">modern</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">rape</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">nurse</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags --><span data-ng-repeat="hentai_tag in video.hentai_tags" class="tag pull-left ng-scope">
                    <em class="fa fa-tag fa-inverse"></em>
                    <span data-ng-bind="hentai_tag" class="ng-binding">uncensored</span>
                  </span><!-- end ngRepeat: hentai_tag in video.hentai_tags -->
                                                    </div>
                                                    <!-- /TAGS -->

                                                </div>
                                            </a>

                                            <!-- FAVORITE BUTTON -->
                                            <button title="Toggle Favorite" data-placement="left" data-toggle="tooltip" data-ng-click="toggleHentaiVideoFavorite(video)" class="favorite-button action-button pull-right button-toggle">
                                                <em data-ng-class="{'fa-heart active': userFavoritedVideo(video), 'fa-heart-o': !userFavoritedVideo(video)}" class="fa fa-2x fa-heart-o"></em>
                                            </button>
                                            <!-- FAVORITE BUTTON -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div></div>

                <div class="max-width-lg">
                    <aside class="videos-sidebar affix">
                        <a ui-sref-active="active" data-ui-sref="home.videos.search" class="sidebar-item active" href="/search">
                            <img width="40" height="40" alt="Search Videos" src="http://www.freeanimehentai.net/images/search.png"><br>
                            Search
                        </a>

                        <a ui-sref-active="active" data-ui-sref="home.videos" class="sidebar-item" href="/">
                            <img width="40" height="40" alt="Recent Videos" src="http://www.freeanimehentai.net/images/time.png"><br>
                            Recent
                        </a>

                        <a ui-sref-active="active" data-ui-sref="home.videos.popular" class="sidebar-item" href="/popular-videos">
                            <img width="40" height="40" alt="Popular Videos" src="http://www.freeanimehentai.net/images/eye.png"><br>
                            Popular
                        </a>

                        <!--       <a class="sidebar-item" data-ui-sref="home.videos.bestRated" ui-sref-active="active">
                                <img src="http://www.freeanimehentai.net/images/heart.png" alt="Popular Videos" width="40" height="40"><br>
                                Top Rated
                              </a> -->

                        <!--       <div class="sidebar-item" data-toggle="modal" data-target="#myModal">
                                <img src="http://www.freeanimehentai.net/images/search.png" alt="Search Videos" width="40" height="40"><br>
                                Search
                              </div> -->
                    </aside>
                </div>

            </div>


            <!-- Modal -->
            <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Popular Videos in the last...</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Apply</button>
                  </div>
                </div>
              </div>
            </div> --></div>

    </section>


    <!-- ACCOUNT REQUIRED MODAL -->

    <!-- /ACCOUNT REQUIRED MODAL -->

    <!-- CONTACT US MODAL -->

    <!-- /CONTACT US MODAL --></div>






</body></html>