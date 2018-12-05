<?php

include("fragments/menu.php");

$a = $_REQUEST["a"];

$b = $_REQUEST["b"];

function sum($a, $b)
{
    $sum1 = $b / ($a * $a);
    return $sum1;
}

echo "Kuno mases indeksas:" . sum($a, $b);

?>