<?php


class User {

    /**
     * Функция создания талицы users.
     * @throws ExceptionDataBase
     */
    public static function createUserTable() {

        $query = ("show tables like '" . AS_DBPREFIX . "users'");
        $res = DB::mysqliQuery(AS_DATABASE, $query);

        if ($res->num_rows === 0) {
            $query = "create table " . AS_DBPREFIX . "users(
                  id int(5)unsigned auto_increment primary key,
                  name varchar(30) not null,
                  email varchar(50) unique not null,
                  auth_token varchar(255),
                  password varchar(255) not null)";
            DB::mysqliQuery(AS_DATABASE, $query);
        }
    }

    /**
     * Добавляет пользователя в базу данных
     * @param $data
     * @return bool
     * @throws ExceptionDataBase
     */
    public static function register($data) {

        self::createUserTable();
        extract($data);
        if (!self::isExists($email)) {
            $query = "insert into " . AS_DBPREFIX . "users (name, email, auth_token, password) 
            values ('$name', '$email', '$auth_token','$password')";
            try {
                DB::mysqliQuery(AS_DATABASE, $query);

                return true;
            } catch (ExceptionDataBase $e) {
                $e->getMessage();

                return false;
            }
        }
    }

    /**
     * Функция проверяет существует ли уже пользователь с данным email.
     * @param $email
     * @return bool
     * @throws ExceptionDataBase
     */
    public static function isExists($email) {

        $query = "select email from " . AS_DBPREFIX . "users where email = '$email'";
        $res = DB::mysqliQuery(AS_DATABASE, $query);
        $res = mysqli_fetch_assoc($res);
        if (isset($res)) return true;

        return false;
    }

    /**
     * Функция возвращает хешированный пароль пользователя по email
     * @param $email
     * @return mixed
     * @throws ExceptionDataBase
     */
    public static function getPassword($email) {

        $query = "select password from " . AS_DBPREFIX . "users where email = '$email'";
        $res = DB::mysqliQuery(AS_DATABASE, $query);

        return mysqli_fetch_assoc($res)["password"];
    }

    /**
     * Функция цстанавливает токен авторизации в базу данных.
     * @param $auth_token
     * @param $email
     * @throws ExceptionDataBase
     */
    public static function setToken($auth_token, $email) {

        $query = "update " . AS_DBPREFIX . "users set auth_token = '$auth_token' where email = '$email'";
        DB::mysqliQuery(AS_DATABASE, $query);
    }

}