<?php


class BlogRouter {

    /**
     * Функция ограничивает доступ для неавторизованных пользователей.
     * @param $query
     */
    public static function dispatch($query) {

        session_start();
        switch ($_SERVER["QUERY_STRING"]) {
            case "route=blog/admin/":
                if (AuthController::isAuthorized()) {
                    self::rout($query);
                } else {
                    echo "Вы не авторизованы";
                }
                break;
            default:
                self::rout($query);
                break;
        }
    }

    /**
     * Функция подкючает нужные файлы (контроллеры и их функции) для роутинга.
     * @param $query
     */
    public static function rout($query) {

        $controller = explode("=", $query[0])[1];
        $action = $query[1];
        $controller = ucwords($controller) . "Controller";
        if (file_exists(AS_ROOT . "libs/classes/" . $controller . ".php")) {
            $controller = new $controller;
            if (method_exists($controller, $action)) {
                $controller->$action();
            }
        }
    }
}