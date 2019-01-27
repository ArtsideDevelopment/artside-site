<?php


class Render {
    public static function view($view, $data = []) {

        extract($data);
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $view = AS_ROOT . "skins/tpl/_blog/" . $view . ".tpl";
            if (file_exists($view)) {
                require $view;
            }
        }
    }

}