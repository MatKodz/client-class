<?php 

function formatTel($tel) {
    $pattern = '/\d{2}/';
    return preg_replace($pattern,"$0 $1 $2 $3 $4 $5",$tel);
}

?>