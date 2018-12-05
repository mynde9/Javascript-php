<?php

include("fragments/menu.php");


function apie()
{
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];

    function suma($a, $b){
        $sum = $b * 100 / $a;
        echo "Kuro sunaudojimas 100km: $sum";
    }
    suma($a, $b);
}
apie();
?>
