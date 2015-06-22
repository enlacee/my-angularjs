<!doctype html>
<html ng-app="route">
    <head>
        <meta charset="utf-8">
        <?php require_once 'library.php' ?>
        <script src="assets/plugins/angular-route/angular-route.js"></script>
    </head>
    <body>
        <div ng-include src=" 'include/header.html' " style="border: 1px solid blue"></div>
        
        mi menu es :
        <div ng-include src=" 'include/menu.html' " style="border: 1px solid red"></div>

        <div ng-view style="background-color: yellow"></div>
        
        <script type="text/javascript">
            var app = angular.module('route', ['ngRoute']);
            
            app.config(['$routeProvider', function($routeProvider){
                $routeProvider
                    .when('/ave1',{
                        templateUrl: 'include/ave/ave1.html'
                    })
                    .when('/ave2',{
                        templateUrl: 'include/ave/ave2.html'
                    })
                    .when('/ave3',{
                        templateUrl: 'include/ave/ave3.html'
                    })
                    .otherwise({
                        redirectTo: '/',
                        templateUrl: 'include/inicio.html'
                    });
            }]);
        </script>
    </body>
</html>
