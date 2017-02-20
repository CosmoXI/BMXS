<?php
session_start();

require_once '../pages/UserPage.php';

if (empty($_SESSION['id'])) {
    $user = new UserPage();
    $user->login($_POST['username'], $_POST['password']);
} else {
    var_dump($_SESSION);
}
