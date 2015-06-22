<!doctype html>
<html ng-app="css">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <button ng-click="cambiarImagen('image1.jpg')">Cambiar Imagen1</button>
        <button ng-click="cambiarImagen('image2.jpg')">Cambiar Imagen2</button>
        <p>imagen es:
            <img ng-src="{{imageDefaul}}"/>
        </p>
    </div>
      
    <script>
    var app = angular.module('css', []);
    
    app.controller('controlador1', ['$scope', function($scope){
        console.log ("hoii");

        $scope.imageDefaul = 'assets/img/image.jpg';
        console.log ($scope.imageDefaul);
        $scope.cambiarImagen = function(image){
            $scope.imageDefaul = 'assets/img/' +image;
        }
        console.log ($scope.imageDefaul);
    }]);
    </script>
  </body>
</html>
