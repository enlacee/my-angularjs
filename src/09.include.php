<!doctype html>
<html ng-app="include">
    <head>
        <meta charset="utf-8">
        <?php require_once 'library.php' ?>
    </head>
    <body>
        <div ng-include src=" 'include/header.html' " style="border: 1px solid blue">    

        </div>
        
        mi menu es :
        <div ng-include src=" 'include/menu.html' " style="border: 1px solid red"></div>

        <script>
            var app = angular.module('include', []);
        </script>
    </body>
</html>
