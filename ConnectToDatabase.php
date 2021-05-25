<?php 
class Coco {

        private $pdo;

        public function __construct($host,$db,$user,$pass) {

            try {
                $dbh = new PDO("mysql:dbname=Customer_management;host=$host", $user, $pass);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
               
            } catch (PDOException $e) {
                echo 'Échec lors de la connexion : ' . $e->getMessage();
                die();
            }

        }

        public static function dataBaseConnect($host = "localhost",$user = "root",$pass = "root") {

      


        }

        public static function dataBaseClose() {
        return null;
        }
    }

?>