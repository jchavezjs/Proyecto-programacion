angular.module("app", ["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
            .when("/", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "templates/inicio.php"
            })
            .when("/catalogo", {
                controller: "catalogoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/catalogo.php"
            })
            .when("/carrito", {
                controller: "carritoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/carrito.php"
            })
            .when("/profile", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "templates/profile.php"
            });
    })
    .controller("appCtrl", function(){
        //código del controlador (lo estoy usando en todas las rutas, en este sencillo ejemplo)
    });