<?php

include("fragments/menu.php");


$a = $_REQUEST["a"];

$b = $_REQUEST["b"];

function sum($a, $b)
{
    $sum1 = $a + $b;
    return $sum1;
}

function aaaa($a, $b)
{
    $aaaa1 = $a - $b;
    return $aaaa1;
}

echo "Suma:" . sum($a, $b) . "<br>";
echo "Skirtumas" . aaaa($a, $b);

?>