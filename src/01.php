<!doctype html>
<html ng-app>
  <head>
    <meta charset="utf-8">
    <?php require_once 'library.php' ?>
  </head>
  <body>
    <div>
        <!-- expresion suma --->
      <label>Name: {{1+0}}</label>
     
      <!-- modelos : desde complejas base de datos hasta pequños campos-->
      <!-- Estos crean dataBinding --->
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <h1>Hello {{yourName}}!</h1>
      <br /> 
      <hr>
      <input type="text" placeholder="modelo angular" ng-model="modelo"/>
      <input type="text" value="{{modelo}}">
      
      
      
      <!-- filtros text-->
      <ul>
          <li>peras {{ 6.00 | currency }}</li>
          <li>piña {{ 5.00 | currency:"S./"}}</li>
          <li>manzanas {{ 2.00 | currency:" c "}} importado del {{'Ecuador'|uppercase}}</li>
      </ul>
      
      <!-- directivas :: directiva controller -->
      <div ng-controller="controller1">
          
          <div ng-show="true">mi imagen show</div>
          
          <button ng-click="controladorBoton()" ng-show="true">Presiona aquí es directiva</button>
          
      </div>
          
          
    </div>
  </body>
</html>
