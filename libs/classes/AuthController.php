<?php


class AuthController {

    /**
     * Функция отображения формы авторизации
     */
    public static function view() {

        Render::view("auth");
    }

    /**
     * Авторизация пользователя в базе
     * @throws ExceptionDataBase
     */
    public function auth() {

        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        if (password_verify($password, User::getPassword($email))) {
            $auth_token = gettimeofday()["sec"];
            User::setToken($auth_token, $email);
            $_SESSION["auth_token"] = $auth_token;
            $_SESSION["user"] = $email;
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/artside-site/admin/view/", true, 302);
            exit();
        }
    }

    /**
     * Функция проверяет авторизован ли пользователь
     * @return bool
     */
    public static function isAuthorized() {

        if (isset($_SESSION["auth_token"])) {
            return true;
        }

        return false;
    }

    /**
     *Функция выхода пользователя из админ.панели
     */
    public function exit() {

        unset($_SESSION["user"]);
        unset($_SESSION["auth_token"]);
        header("Location: http://" . $_SERVER["HTTP_HOST"] . "/artside-site/blog/view/", true, 302);
    }
}