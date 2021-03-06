<!doctype html>
<html ng-app="css">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
    <style>
        .bg-white {
            background: white;
            color: pink;
        }
        .bg-black{
            background: black;
            color: white;
        }
    </style>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <p ng-style="dataStyle">texto a  modificar por <span ng-class="dataClass">CSS HTML</span></p>
        <button ng-click="cambiarPropiedades()">Cambiar propiedades</button>
        <button ng-click="cambiarClase()">Cambiar Clase</button>
        <button ng-click="reset()">Reset Style</button>
    </div>
      
    <script>
    var app = angular.module('css', []);
    
    app.controller('controlador1', ['$scope', function($scope){
        $scope.dataStyle = {'color' : 'red'}
        
        $scope.cambiarPropiedades = function(){
            $scope.dataStyle = {'color' : 'blue'}
        };
        $scope.cambiarClase = function(){
            if ($scope.dataClass == 'bg-black') {
                 $scope.dataClass = 'bg-white';
            } else {
                $scope.dataClass = 'bg-black';
            }
            
        };
        $scope.reset = function(){
            $scope.dataClass = '';
            $scope.dataStyle = '';
        };
    }]);
    </script>
  </body>
</html>
