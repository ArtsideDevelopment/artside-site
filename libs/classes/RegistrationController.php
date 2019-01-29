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
        $_SESSION["user"] = $email;
        $data = compact("name", "email", "password", "auth_token");
        if (User::register($data)) {

            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/artside-site/blog/admin/", true, 302);
            exit();
        }
    }
}