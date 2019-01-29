<?php


class Render {
    /**
     * Функция отображает переданный вид. Возможна передача параметров.
     * @param $view
     * @param array $data
     */
    public static function view($view, $data = []) {

        extract($data);
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $view = AS_ROOT . "skins/tpl/_blog/" . $view . ".tpl";
            if (file_exists($view)) {
                include $view;
            }
        }
    }

}