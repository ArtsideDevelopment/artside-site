<?php


class BlogController {


    public function view() {

        Render::view("blog");
    }

    public function admin() {

        Render::view("admin");

    }
}