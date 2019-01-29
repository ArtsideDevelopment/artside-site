<?php


class BlogRouter {

    public static function dispatch($query) {

//        if (isset($_SESSION["user"])) {
            $controller = explode("=", $query[0])[1];
            $action = $query[1];
            $controller = ucwords($controller) . "Controller";
            if (file_exists(AS_ROOT . "libs/classes/" . $controller . ".php")) {
                $controller = new $controller;
                if (method_exists($controller, $action)) {
                    $controller->$action();
                }
            }
//        } else {
//            echo "Вы не авторизованы";
//        }
    }
}