<!doctype html>
<html ng-app="accion">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <button ng-click="clickSimple()">clickeame</button>
        <button ng-dblclick="clickDoble()">clickeame doble</button>
        <p ng-mouseenter="mouseEnterImage()" ng-mouseleave="mouseOutImage()">
            <img src="../assets/img/image.jpg"/>
        </p>
        <span style="background: yellow;color: black; font-weight: bold">
            : {{ textEvento }}
        </span>
    </div>
      
    <script>
    var app = angular.module('accion', []);
    app.controller('controlador1', ['$scope', function($scope){
        $scope.clickSimple = function(){
            $scope.textEvento = '1 click';
        };
        
        $scope.clickDoble = function(){
            $scope.textEvento = '2 click : dobleclick'
        };
        
        // mouser 
        $scope.mouseEnterImage = function(){
            $scope.textEvento = 'mouse enterImage';
        };
        $scope.mouseOutImage = function(){
            $scope.textEvento = 'mouse mouseOutImage';
        };
    }]);
    </script>
  </body>
</html>
