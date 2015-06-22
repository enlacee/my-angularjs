<!doctype html>
<html ng-app="accion">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <h2>Lista de Nombres</h2>
        <ul>
            <li ng-repeat="nombre in dataNombres">{{nombre|uppercase}}</li>
        </ul>
        <h2>Lista de Actores</h2>
        <ul>
            <li ng-repeat="actor in dataActores">
                {{actor.name | uppercase}} {{actor.lastname}}
            </li>
        </ul>
    </div>
      
    <script>
        var app = angular.module('accion',[]);

        app.controller('controlador1', ['$scope',function($scope){
            $scope.dataNombres = ['Pepe', 'Carlos', 'Juan', 'Percy'];
            $scope.dataActores = [
                {name : 'Juan', lastname : 'tavona'},
                {name : 'David', lastname : 'Ronals'},
                {name : 'Carlos', lastname : 'bunero'}
            ];
        }]);
    </script>
  </body>
</html>
