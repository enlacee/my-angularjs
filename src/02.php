<!doctype html>
<html ng-app="miTiendaDeFruta">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <h1>Promoción de Mangos</h1>
        <p>
            Cantidad de mangos es :
        </p>
        <input type="text" value="" ng-model="cantidad"/>
        <br />Precio por unidad es : {{precio|currency:"S./"}} soles
        <br />Precio total es : <strong>{{ cantidad * precio | currency:"S./"}}</strong>
    </div>
      
    <script>
        var miAplicacion = angular.module('miTiendaDeFruta',[]);
        miAplicacion.controller('controlador1', ['$scope', function($scope){
            $scope.precio = 6;
            $scope.cantidad = 0;
        }]);
    </script>
  </body>
</html>
