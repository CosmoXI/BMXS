<?php

/*
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */

require_once 'UserPage.php';

class AdminPage {
    
    public function render() {
        
        //si la session n'a pas de niveau
        if (empty($_SESSION['nv'])) {
        //aller au a la méthode login de la class userpage
            UserPage::login(); 
        //sinon aller à l'administratoin
        } else {
            require_once '../template/back.php'; 
        }

    }
    
    public function getMenu() {
        echo 'Administration ';
        echo '<a href="../index.php">Index</a> ';
        echo '<a href="logoff.php">Déconnexion</a> ';
    }
    
}
