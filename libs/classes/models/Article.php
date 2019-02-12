<?php


class Article {
    /**
     * Функция создания талицы articles.
     * hint: Будет использована при добавлении статьи в админ.панели.
     * @param String $dataBase
     * @throws ExceptionDataBase
     */
    public static function createArticleTable(String $dataBase) {

        $query = ("show tables like '" . AS_DBPREFIX . "articles'");
        $res = DB::mysqliQuery(AS_DATABASE, $query);

        if ($res->num_rows === 0) {

            $query = "create table " . AS_DBPREFIX . "articles(
                  id int(5)unsigned auto_increment primary key,
                  title varchar(255) not null,
                  content text not null,
                  user_id int(5) unsigned not null)";
            DB::mysqliQuery(AS_DATABASE, $query);

            $query = "alter table " . AS_DBPREFIX . "articles
                  add foreign key (user_id) references " . AS_DBPREFIX . "users(id)";

            DB::mysqliQuery(AS_DATABASE, $query);
        }

    }

    public static function getArticles() {

        $query = "select * from " . AS_DBPREFIX . "articles order by id desc";

        $res = DB::mysqliQuery(AS_DATABASE, $query);

        return mysqli_fetch_assoc($res);
    }


    public static function add($article) {

        $title = $article["title"];
        $content = $article["content"];
        $user_id = 1;

        self::createArticleTable(AS_DATABASE);

        $query = "insert into " . AS_DBPREFIX . "articles(title, content, user_id) values('$title',
            '$content', '$user_id')";
        DB::mysqliQuery(AS_DATABASE, $query);

    }
}