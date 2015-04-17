/**
 * Created by Shane on 4/16/2015.
 */
(function() {
   var app = angular.module('app', []);

    app.controller('MessageCtrl', ['$scope', '$http', '$log', '$interval', '$location',
        function($scope, $http, $log, $interval, $location) {
            $scope.base_url = 'http://localhost:8000';

            $scope.url = $location.absUrl().split("/");

            var test = function() {
                console.log($scope.url);
                $log.log($scope.url);
            };

            test();
        }
    ]);
}());