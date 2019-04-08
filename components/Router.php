<?php

class Router {

    private $routes;

    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include ($routesPath);
    }

    public function run() {
        //Получить строку запроса
        
        //Проверить наличие такого запроса в routes.php
    }

}
