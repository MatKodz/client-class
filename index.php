<?php 

define("ROOT", __DIR__ );
include( ROOT . "/inc/header.php");

require (ROOT . "/inc/Clients.php");
require (ROOT . "/inc/fn.php");

?>

<div class="row clients">

    <?php $clients = new Customers();

    if(true) {
        foreach ( $clients->getCustomers() as $client) {
            include __DIR__  . "/inc/temp-clients.php";
        }
    }

    else echo "Aucun client à afficher";


    echo '<div class="col-12 py-3"> Nombre de clients total <span class="badge badge-success">' .  $clients->rowClients . '</span></div>';



    ?>

</div>

<?php

include( __DIR__ . "/inc/footer.php");


?>
