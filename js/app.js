angular.module("app", ["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
            .when("/inicio", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "templates/inicio.html"
            })
            .when("/catalogo", {
                controller: "catalogoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/catalogo.html"
            })
            .when("/opciones", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "opciones.html"
            });
    })
    .controller("appCtrl", function(){
        //código del controlador (lo estoy usando en todas las rutas, en este sencillo ejemplo)
    });