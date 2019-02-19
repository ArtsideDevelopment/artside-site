<?php


class AuthController {

    /**
     * Функция отображения формы авторизации
     * @param $data
     */
    public static function view() {

        $data = array();

        Render::view("auth", $data);
    }

    /**
     * Авторизация пользователя в базе
     * @throws ExceptionDataBase
     */
    public function auth() {


        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        if (md5($password) === User::getPassword($email)) {
            $auth_token = gettimeofday();
            $auth_token = $auth_token["sec"];
            User::setToken($auth_token, $email);
            $_SESSION["auth_token"] = $auth_token;
            $_SESSION["user"] = $email;
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/admin/view/", true, 302);
        } else {
            echo "Неверный логин или пароль";
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
    public function logout() {

        unset($_SESSION["user"]);
        unset($_SESSION["auth_token"]);
        header("Location: http://" . $_SERVER["HTTP_HOST"] . "/blog/view/", true, 302);
    }
}