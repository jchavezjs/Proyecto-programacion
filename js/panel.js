angular.module("panel", ["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
            .when("/", {
                controller: "appCtrl",
                controllerAs: "vm",
                templateUrl: "templates/panel_inicio.php"
            })
            .when("/productos", {
                controller: "catalogoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/productos.php"
            })
            .when("/usuarios", {
                controller: "carritoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/usuarios.php"
            })
            .when("/compras", {
                controller: "carritoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/compras.php"
            })
            .when("/agregar", {
                controller: "carritoCtrl",
                controllerAs: "vm",
                templateUrl: "templates/Producto1.html"
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