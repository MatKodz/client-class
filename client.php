<?php

include( __DIR__ . "/inc/header.php");

require (__DIR__ . "/inc/Clients.php");

require (__DIR__ . "/inc/fn.php");

if(isset($_GET['idclient']) and is_numeric($_GET['idclient'])) {
    $idclient = $_GET['idclient'];
    $oneclient = new Customers();
    $client = $oneclient->getCustomer($idclient);
    if($client !== null)
    include __DIR__  . "/inc/temp-clients.php";
    else echo '<p class="alert alert-info">Client inconnu # ' . $idclient .'</p>';
}
else echo '<p class="alert alert-warning">Aucun client à afficher</p>';

include( __DIR__ . "/inc/footer.php");


?>