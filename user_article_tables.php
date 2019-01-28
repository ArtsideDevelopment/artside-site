<?php




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
                  user_id int(5) unsigned not null); 
                  
                  alter table '" . AS_DBPREFIX . "articles'
                  add foreign key (user_id) references " . AS_DBPREFIX . "users(id)";
            $connection->query($query);
            $connection->close();
        }
    }
}

