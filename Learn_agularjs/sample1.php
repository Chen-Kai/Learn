<html>
<head>
    <meta charset=utf-8 />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
      $http.get("json.php").then(function (response) {
          $scope.you = response.data[0].a;
      });
    });

    app.controller('myCtrl2', function($scope, $http) {
      $http.get("json.php").then(function (response) {
          $scope.my = response.data[1].a;
      });
    });
    </script>
</head>
<body  ng-app="myApp">
    <div  ng-controller="myCtrl">
        <p>message :</p>
        <h1>{{you}}</h1>
    </div>

    <div  ng-controller="myCtrl2">
        <h1>{{my}}<h1>
    </div>
</body>
</html>


