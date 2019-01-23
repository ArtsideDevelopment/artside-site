﻿<?php
/**  modules/_main/read_controller.php
 * Controller
 * Контроллер
 * @author Dulebsky A. 14.06.2015
 * @copyright © 2015 ArtSide
 */
/////////////////////////////////////////////////////////  
/**
 * Generation of page of an error at access out of system
 * Генерация страницы ошибки при доступе вне системы
 */
if (!defined('AS_KEY')) {
    Router::routeErrorPage404();
}
///////////////////////////////////////////////////////////

$PAGE = Page::getInstance(Router::getUrlPath());
