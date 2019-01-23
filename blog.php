<?php


/**
 * Функция создания талицы users.
 * hint: Будет использована при регистрации пользователя.
 * @param String $dataBase
 */
function createUserTable(String $dataBase) {

    $connection = new mysqli(
        DB::HOST,
        DB::USER,
        DB::PASS,
        $dataBase);

    if (!$connection) {
        die("Ошибка подключения к базе данных");
    } else {
        $query = ("show tables like '" . AS_DBPREFIX . "users'");
        if (($connection->query($query))->num_rows === 0) {
            $query = "create table " . AS_DBPREFIX . "users(
                  id int(5)unsigned auto_increment primary key,
                  name varchar(30) not null,
                  email varchar(50) not null,
                  password varchar(255))";
            $connection->query($query);
            $connection->close();
        }
    }
}


/**
 * Функция создания талицы articles.
 * hint: Будет использована при добавлении статьи в админ.панели.
 * @param String $dataBase
 */
function createArticleTable(String $dataBase) {

    $connection = new mysqli(
        DB::HOST,
        DB::USER,
        DB::PASS,
        $dataBase);

    if (!$connection) {
        die("Ошибка подключения к базе данных");
    } else {
        $query = ("show tables like '" . AS_DBPREFIX . "articles'");
        if (($connection->query($query))->num_rows === 0) {
            $query = "create table " . AS_DBPREFIX . "articles(
                  id int(5)unsigned auto_increment primary key,
                  title varchar(255) not null,
                  content text not null,
                  user_id int(5) unsigned); 
                  
                  alter table '" . AS_DBPREFIX . "articles'
                  add foreign key (user_id) references " . AS_DBPREFIX . "users(id)";
            $connection->query($query);
            $connection->close();
        }
    }
}
