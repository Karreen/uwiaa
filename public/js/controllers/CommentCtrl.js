(function(){
    var app = angular.module('app', []);

    app.controller('CommentCtrl', ['$scope', '$http', '$log', '$interval', '$location',
        function($scope, $http, $log, $interval, $location) {

            $scope.base_url = 'http://localhost:8000';

            $scope.url = $location.absUrl().split("/");
            $scope.post_id = $scope.url[$scope.url.length - 1];
            $scope.request_url = $scope.base_url + '/posts/' + $scope.post_id + '/comments/';
            $scope.post_url = $scope.base_url + '/posts/' + $scope.post_id + '/comments/';
            $scope.comments = null;

            $scope.addComment = function() {

                $log.log($scope.post_url);

                $http.post($scope.post_url, {content: $scope.message}).
                    then(function(response) {
                        var content = response;
                        $log.log(content);
                    });
                    //success(function(response, status) {
                    //    $log.log(status + " " + response);
                    //}).
                    //error(function(reason, status) {
                    //    $log.warn(status);
                    //});
            };

            var onComments = function() {
                $http.get($scope.request_url).
                    error(function(reason, status) {
                        $log.warn(status);
                    }).
                    then(function(response) {
                        $log.log(response.data);
                        $scope.comments = response.data;

                    });
            };

            var getComments = function() {

                $interval(onComments, 4000);
            };

            $scope.timer = 10;

            onComments(); // gets initial comments
            getComments(); // periodically updates comments list
        }
    ]);

}());