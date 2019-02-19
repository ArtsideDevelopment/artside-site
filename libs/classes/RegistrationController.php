<?php


class RegistrationController {

    /**
     *Функция отображает регистрационную форму
     */
    public function view() {
        $data = array();

        Render::view("reg", $data);
    }

    /**
     * Функция добавления пользоавтеля в базу
     * @throws ExceptionDataBase
     */
    public function register() {



        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        $password = md5($password);
        $auth_token = gettimeofday();
        $_SESSION["auth_token"] = $auth_token;
        $_SESSION["user"] = $email;
        $data = compact("name", "email", "password", "auth_token");
        if (User::register($data)) {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/admin/view/", true, 302);
            exit();
        }
    }
}