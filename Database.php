<?php

/*
 * Projet Dynamique année 2016 - 2017
 * Damien Colige
 * BMX Soumagne
 */

class Database {
    
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo;

    public function __construct(){
        $this->db_name = 'bmxs_00.1';
        $this->db_user = 'root';
        $this->db_pass = '';
        $this->db_host = 'localhost';
    }
    
    /**
     * Attention au port, puis essayer de l'avoir un private
     */
    public function getPDO() {
        if (is_null($this->pdo)) {
            $pdo = new PDO( 'mysql:dbname=' . $this->db_name . 
                            ';host=' . $this->db_host .
                            ';port=3306;charset=utf8', 
                            $this->db_user, 
                            $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    
    public function requete($statement) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute();
        $data = $req->fetchObject();
        return $data;
    }
}
