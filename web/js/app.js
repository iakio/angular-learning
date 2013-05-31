
function Controller($scope, $resource) {
  var User = $resource('/user/:userId', {userId: '@id'});

  $scope.user = User.get({userId: 123}, function () {
    console.log($scope.user);
  });
}
angular.module('app', ['ngResource']);
