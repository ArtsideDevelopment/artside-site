<?php


class ArticleController {

    public function getArticles() {

        return Article::getArticles();
    }

    public function add() {

        $article = array(
            "title" => $_POST["title"],
            "content" => $_POST["content"],
            "user_id" => 1,
        );


        Article::add($article);
    }
}