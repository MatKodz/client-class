<?php 

require_once "DB.php";

class Customers {
    
    private $dbh;

    private $datas;

    public $rowClients;

    public function connexion() {
        /* $conn = new DB();
        $this->dbh = $conn->pdo;*/
        try {
            $pdo = new PDO("mysql:dbname=Customer_management;host=localhost", "root", "root");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh = $pdo;
           
        } catch (PDOException $e) {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
            die();
        }
    }

    public function getCustomers() {

        $this->connexion();

        $smth = $this->dbh->query("SELECT CUS_id, CUS_lastname, CUS_firstname, CUS_phone, CUS_email, CUS_town, CUS_register FROM customer_list");

        $clients =  $smth->fetchAll(PDO::FETCH_ASSOC);

        if ($clients) {
            $this->rowClients = $smth->rowCount();
            return $clients;
        }
        
        else return null;
       
       $this->dbh = null;
    }

    public function getCustomer($id) {

        $this->connexion();
        
        $smth = $this->dbh->prepare("SELECT CUS_id, CUS_lastname, CUS_firstname, CUS_phone, CUS_email, CUS_town, CUS_register FROM customer_list WHERE CUS_id = ?");

        $smth->execute([$id]);

        if ($smth->rowCount()) {
            return $smth->fetch(PDO::FETCH_ASSOC);
        } 
        else {
            return null;
        }

        $this->dbh = null;

    }

    public function formDatas () {

    }

    public function createCustomer($nom, $prenom, $mail) {

    }


}


?>