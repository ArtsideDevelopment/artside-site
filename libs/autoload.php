<?php
/*   
* /core/autoload.php 
* File to auto load the classes
* Файл для автозагрузки классов 
* @author ArtSide Dulebsky A. 07.06.2015    
* @copyright © 2015 ArtSide   
*/
/**
 * Register function for __autoload()
 * Регистрация функции в качестве реализации метода __autoload()
 */
spl_autoload_register('autoloadClass');
function autoloadClass($className) {

    $map = array(
        'DB' => AS_ROOT . 'libs/classes/DB.class.php',
        'Mailer' => AS_ROOT . 'libs/classes/Mailer.class.php',
        'Router' => AS_ROOT . 'libs/classes/Router.class.php',
        'Page' => AS_ROOT . 'libs/classes/Page.class.php',
        'ExceptionFiles' => AS_ROOT . 'libs/classes/ExceptionFiles.class.php',
        'ExceptionDataBase' => AS_ROOT . 'libs/classes/ExceptionDataBase.class.php',
        'xajax' => AS_ROOT . 'libs/xajax/xajax_core/xajax.inc.php',
        'Enum' => AS_ROOT . 'libs/classes/enums/Enum.class.php',
        'DialogMsg' => AS_ROOT . 'libs/classes/enums/DialogMsg.class.php',
        'Debug' => AS_ROOT . 'libs/classes/Debug.php',
        'BlogRouter' => AS_ROOT . 'libs/classes/BlogRouter.php',
        'Render' => AS_ROOT . 'libs/classes/Render.php',
        'AuthController' => AS_ROOT . 'libs/classes/AuthController.php',
        'BlogController' => AS_ROOT . 'libs/classes/BlogController.php',
        'RegistrationController' => AS_ROOT . 'libs/classes/RegistrationController.php',
        'AdminController' => AS_ROOT . 'libs/classes/AdminController.php',
        'ArticleController' => AS_ROOT . 'libs/classes/ArticleController.php',
        'User' => AS_ROOT . 'libs/classes/models/User.php',
        'Article' => AS_ROOT . 'libs/classes/models/Article.php'
    );
    include $map[$className];
}