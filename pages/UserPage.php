<?php

/*
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */

class UserPage {
    
    private static $pdo;
    private static $instance;


    public function __construct() {
         $pdo = new Database();
         self::$pdo = $pdo->getPDO();   
    }
  
    public static function login() {
        
        $erreur = false;
        
        if (empty($_POST)){
            
            require_once '../template/login.php'; 
        
        } else {
            
            // Instanciation pour accéder au parametre pdo
            if (is_null(self::$pdo)) {
                self::$instance = new UserPage();
            }

            $sql = 'SELECT idusers, name, pass, niveau'
            . ' FROM users'
            . ' WHERE name = :name';

            $req = self::$pdo->prepare($sql);
            $req->execute(['name' => $_POST['username']]);

            $data = $req->fetchObject();
            
            // Vérification du mot de passe et gestion d'erreur
            if($data && password_verify($_POST['password'], $data->pass)) {
                $_SESSION['id'] = $data->idusers;
                $_SESSION['nv'] = $data->niveau;
                header('location: ?page=admin');
            } else {
                $erreur = true;
            }        
        } 
        
    }
    
}

//var_dump(password_hash('moderateur', PASSWORD_DEFAULT));
//var_dump(password_verify('admin', '$2y$10$SZfgYMv6VCq7FxDA8.zh6u7UtNXtmCwj7609SOzNdBXCkGVGgpFrK'));

/*
 *         $erreur = false;
        var_dump($_POST);
        
        if (empty($_POST)){
            UserPage::login(); 
        }
         else {
            $erreur = true;
        }    
        
        if ($erreur) {
            echo 'Erreur de connexion';
            //require_once '../template/login.php'; 
        } else {
            //require_once '../template/back.php';            
        }
 */