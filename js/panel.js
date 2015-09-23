angular.module("panel", ["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
            .when("/", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "templates/panel_inicio.html"
            })
            .when("/productos", {
                controller: "catalogoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/productos.html"
            })
            .when("/usuarios", {
                controller: "carritoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/usuarios.html"
            })
            .when("/compras", {
                controller: "carritoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/compras.html"
            })
            .when("/profile", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "templates/profile.html"
            });
    })
    .controller("appCtrl", function(){
        //código del controlador (lo estoy usando en todas las rutas, en este sencillo ejemplo)
    });