<!doctype html>
<html ng-app="css">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <p ng-show="dataBoolean">
            Mensaje secreto
        </p>
        <button ng-click="mostrar()">Mostrar message</button>
    </div>
      
    <script>
    var app = angular.module('css', []);
    
    app.controller('controlador1', ['$scope', function($scope){
        $scope.dataBoolean = false;
        
        $scope.mostrar = function(){
          $scope.dataBoolean = true  
        };
        
    }]);
    </script>
  </body>
</html>
