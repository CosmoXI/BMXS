<?php

/*
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */
require_once 'Pages.php';

class UserPage extends Pages {
    
    public function __construct() {
         $pdo = new Database();
         $this->pdo = $pdo->getPDO();   
    }


    public function render() {
        if(isset($_SESSION['nv'])){
            header('location: ../public_html/index.php?page=admin');
        } else {
            require_once '../template/login.php';            
        }
    }
    
    public function login($name, $pass) {
        
        $sql = 'SELECT idusers, name, pass, niveau'
        . ' FROM users'
        . ' WHERE name = :name';

        $req = $this->pdo->prepare($sql);
        $req->execute(['name' => $name]);
        
        $data = $req->fetchObject();
                
        if($data && password_verify($pass, $data->pass)) {
            $_SESSION['id'] = $data->idusers;
            $_SESSION['nv'] = $data->niveau;
            $this->render();
        } else {
            echo 'connexion refusée';
            var_dump($_SESSION);
            echo '<a href="../public_html/index.php">index</a>';
        }
        
    }
    
}

//var_dump(password_hash('moderateur', PASSWORD_DEFAULT));
//var_dump(password_verify('admin', '$2y$10$SZfgYMv6VCq7FxDA8.zh6u7UtNXtmCwj7609SOzNdBXCkGVGgpFrK'));