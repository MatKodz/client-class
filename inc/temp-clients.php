<?php 
    $content = "";
    extract($client);
    ob_start();
?>
<div class="col-4 bg-light p-3 border-right border-bottom">
    <p class="text-primary h4">
    <?php
    echo strtoupper($CUS_lastname) , " " , $CUS_firstname , "</p>";
    echo " <div> " . formatTel($CUS_phone) . "</div><div><a href=\"#\">$CUS_email</a></div>"; 
    echo "<div> $CUS_town </div>"; 
    echo "<div>Inscrit le :  $CUS_register </div>"; 
    $content = ob_get_clean();
    echo $content . "\n";
    ?>
</div>