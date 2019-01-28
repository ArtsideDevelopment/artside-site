<?php


class RegistrationController {

    /**
     *Функция отображает регистрационную форму
     */
    public function view() {

        Render::view("reg");
    }

    /**
     * Функция добавления пользоавтеля в базу
     * @throws ExceptionDataBase
     */
    public function register() {

        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        $password = password_hash($password, PASSWORD_DEFAULT);
        $auth_token = gettimeofday()["sec"];
        $_SESSION["auth_token"] = $auth_token;
        $data = compact("name", "email", "password", "auth_token");
        if (User::register($data)) {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/artside-site/blog/view/", true, 302);
            exit();
        }


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
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/artside-site/blog/view/", true, 302);
            exit();
        }


    }

}