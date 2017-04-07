<?php

/*
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */

require_once '../Database.php';

class Pages {
    
    // Instance de la db
    public $pdo;
    
    public function __construct() {
        $pdo = new Database();
        $this->pdo = $pdo->getPDO();
        $this->getData();
    }

    /**
     * Construit la page visiteur
     */
    public function render() {
        require_once '../template/front.php';
    }

    /**
     * Stock les valeur dans les paramètres 
     */
    public function getData() {
        // Requête de la page sélectionnée
        $sql = "SELECT title, description, content "
                . "FROM pages "
                . "WHERE slug = :page AND `view`=1";

        // Envoi de la requête à la db
        $req = $this->pdo->prepare($sql);
        $req->execute(['page' => $_GET['page']]);
                
        // Remettre dans les objets au quel il se rapporte
        $data = $req->fetchObject();
        $this->title        = $data->title;
        $this->description  = $data->description;
        $this->content      = $data->content;
    }

    
    public function getMenu() {
        // Menu
        // Requête du menu principal
        $sql = "SELECT link, slug "
                . "FROM pages "
                . "WHERE `view`=1";
        // Préparation des données
        $req = $this->pdo->prepare($sql);
        $req->execute();
        
        // Récupération des données sous forme d'objet
        while ($menu = $req->fetchObject()){ 
            echo '<li><a href="?page='.$menu->slug.'">'.$menu->link.'</a></li>';
        }
    }
    
    public function menuAdmin() {
        if(isset($_SESSION['id'])) {
            echo '<a href="?page=user">Administration</a>';
        } else {
            echo '<a href="?page=user">Connexion</a>';
        }        
    }
    
}
