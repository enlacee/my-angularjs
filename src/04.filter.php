<!doctype html>
<html ng-app="agenda">
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div ng-controller="controlador1">    
        <h2>lista de agenda</h2>
        <label>Buscar</label>
        <input type="text" placeholder="buscar" value="" ng-model="busqueda"/>
        <ul>
            <li ng-repeat="data in dataAgenda | filter:busqueda">
                {{data.name}} phone: {{data.phone}}
            </li>
        </ul>
            
    </div>
      
    <script>
        var app = angular.module('agenda', []);
        app.controller('controlador1', ['$scope', function($scope){
            $scope.dataAgenda = [
                {name : 'juana rosa', phone : '98984878'},
                {name : 'carlos peale', phone : '98984878'},
                {name : 'romario suniami', phone : '97874554'},
                {name : 'mariana robles', phone : '99897673'},
            ];
        }]);
    </script>
  </body>
</html>
