<?php

/*
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */

class AdminPage {
    
    public function render() {
        require_once '../template/back.php';
    }
    
    public function getMenu() {
        echo 'Administration ';
        echo '<a href="../public_html/index.php">Index</a> ';
        echo '<a href="../admin/logoff.php">Déconnexion</a> ';
    }
    
}
