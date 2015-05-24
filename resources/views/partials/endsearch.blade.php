<!-- search-combox begin -->
<div data-ng-controller="EndSearchController" class="search-combox">
    <form class="search-form" novalidate>
        <div class="search-input">
            <input data-ng-change="showSuggestion()" data-ng-focus="showSuggestion()" data-ng-model="keyword" name="keyword" placeholder="Enter Keywords" autocomplete="off" type="text">
        </div>
        <button type="button" data-ng-click="goSearch()" class="search-button j-press"><i></i></button>
    </form>

    <div id="suggestion" style="display:block" class="search-suggestion" data-ng-show="haveSuggestionData">
        <ul class="suggestion-list">
            <li class="item" data-ng-repeat="first in firstSuggestion">
                <a class="inner j-press" data-ng-href="<% makeUrl(first) %>">
                    <img data-ng-src="<% makeIcon(first.icon) %>" alt="Picture">
                    <p class="name"><% first.title %></p>
                    <p class="other">
                        <span class="size"><% first.total %></span>
                    </p>
                </a>
                <a class="btn-download j-press" data-ng-href="<% makeDownload(first.slug) %>">Download</a>
            </li>

            <li class="item" data-ng-repeat="suggest in appSuggestions">
                <a class="inner j-press" data-ng-href="<% makeUrl(suggest) %>"><% suggest.title %></a>
            </li>

        </ul>
    </div>
</div>