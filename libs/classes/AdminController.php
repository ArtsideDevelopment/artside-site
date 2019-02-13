<?php


class AdminController {

    /**
     *Функция отображаения вида административной панели
     */
    public static function view() {

        $data = array();
        $data ["user"] = $_SESSION["user"];
        Render::view("admin", $data);
    }

    /**
     *Фнкция провряет авторизован ли пользователь для доступа к админке.
     */
    public static function admin() {

        if (AuthController::isAuthorized()) {
            self::view();
        } else {
            AuthController::view();
        }
    }
}