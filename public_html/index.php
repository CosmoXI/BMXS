<?php
define('ROOT', dirname(__DIR__));
session_start();
/* 
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */

require_once '../pages/Pages.php';
require_once '../pages/HomePage.php';
require_once '../pages/EventsPage.php';
require_once '../pages/AboutPage.php';
require_once '../pages/UserPage.php';
require_once '../pages/AdminPage.php';


$_GET['page'] = $_GET['page'] ?? 'home';

$class = ucfirst($_GET['page']).'Page';

$page = new $class();

if ($_GET['page'] == 'user') {
    $page->login();
} else {
    $page->render();    
}
