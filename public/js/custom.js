var app = angular.module('Application', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController', function($scope, $timeout, $window){
     $scope.keyword = Config.keyword;
     $scope.goSearch = function(){
        if ($scope.keyword.length > 2) {
            var slug = $scope.keyword
                .toLowerCase()
                .replace(/ /g,'-')
                .replace(/[^\w-]/g,'');
            $window.location.href = Config.url + '/search/tag-' + slug ;
        }
     }

    $scope.displayEndSearch = function(){
        $timeout(function(){
            $('section#mainContainer').hide();
            $('section#searchWrap').show();
        }, 0);
    }
});

app.controller('DownloadController', function($scope, $http){
    $scope.link = null;
    $scope.google = false;
    $scope.loading = false;
    $scope.getLink = function(id) {
        $scope.loading = true;
        $http.get(Config.url + '/downloadLink/' + id).then(function(response){
           $scope.loading = false;
           $scope.link = response.data.link;
           if ($scope.link.indexOf('play.google.com')) {
               $scope.google = true;
           }
        });
    }
});

app.controller('EndSearchController', function($scope, $window, $http){
     $scope.keyword = Config.keyword;
     $scope.haveSuggestionData = false;
     $scope.firstSuggestion = [];
     $scope.appSuggestions = [];

    $scope.makeUrl = function(record) {
        return Config.url + '/android-' + record.type + '/' + record.slug;
    }

    $scope.makeIcon = function(icon) {
        return Config.url + '/images/avatars/' + icon;
    }

    $scope.makeDownload = function(slug) {
        return Config.url  + '/download-free/' + slug;
    }

    $scope.showSuggestion = function(){
        if ($scope.keyword.length > 2 && $scope.keyword != Config.keyword) {
            $scope.haveSuggestionData = false;
            $scope.firstSuggestion = [];
            $scope.appSuggestions = [];
            $http.post(Config.url + '/suggestion', { term : $scope.keyword }).then(function(response){
                if (response.data.length > 0) {
                    $scope.haveSuggestionData = true;
                    for (var i = 0; i < response.data.length;  i ++) {
                        if (i == 0) {
                            if ($scope.firstSuggestion.length == 0) {
                                $scope.firstSuggestion.push(response.data[i]);
                            }
                        } else {
                            $scope.appSuggestions.push(response.data[i]);
                        }
                    }
                }
            });
        }
    }
    $scope.goSearch = function(){
        if ($scope.keyword.length > 2) {
            var slug = $scope.keyword
                .toLowerCase()
                .replace(/ /g,'-')
                .replace(/[^\w-]/g,'');
            $window.location.href = Config.url + '/search/tag-' + slug ;
        }
    }
});