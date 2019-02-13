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

        Debug::dd(phpinfo());

        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        if (

            password_verify($password, User::getPassword($email))) {
            $auth_token = gettimeofday();
            User::setToken($auth_token, $email);
            $_SESSION["auth_token"] = $auth_token;
            $_SESSION["user"] = $email;
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/artside-site/admin/view/", true, 302);
            exit();
        } else{
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
    public function exitFunction() {

        unset($_SESSION["user"]);
        unset($_SESSION["auth_token"]);
        header("Location: http://" . $_SERVER["HTTP_HOST"] . "/artside-site/blog/view/", true, 302);
    }
}