<?php

include_once('autoload.php');


$mainApp = new Module('myApp', ['RouterProvider']);

$mainApp->config('RouterProvider', function(IAngularConfig $routerProvider) {

    $routerProvider
        ->when('/', ['controller' => 'HomeController', 'templateUrl' => 'html/home.php'])
        ->when('/test', ['controller' => 'TestController', 'templateUrl' => 'html/test.php'])
        ->otherwise(new Location('/'));

    return $routerProvider;
});

$rootScope = new RootScope($mainApp);

$scope = new Scope($rootScope);
$scope->controller('HomeController', function($nome){

    return 'LoLXX ';
});

echo $scope->HomeController('Felipe Barros');


$rootScope->run();