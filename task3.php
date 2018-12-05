<?php

include ("fragments/menu.php");

$a = $_REQUEST["a"];

$b = $_REQUEST["b"];

$sum = ($a + $b);
$sk = ($a - $b);
echo "Suma: $sum<br>";
echo "Skirtumas: $sk";


?>