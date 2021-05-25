<?php 
class DB { 

        public $pdo;

        public function __construct($user = "root",$pass = "root",$db = "Customer_management",$host="localhost") {

            try {
                $this->pdo = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
            } catch (PDOException $e) {
                echo 'Échec lors de la connexion : ' . $e->getMessage();
                die();
            }

        }


        public function dataBaseClose() {
        $this->pdo = null;
        }
    }


?>