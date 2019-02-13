<?php


class BlogController {

    /**
     *Функция отображения вида блога
     */
    public function view() {

        $articles = Article::getArticles();

        Render::view("blog", $articles);
    }



}