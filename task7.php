<?php

include ("fragments/menu.php");

$a = $_REQUEST["a"];

$b = $_REQUEST["b"];

$sum = $b * 100 / $a;
echo "Kuro sunaudojimas 100km: $sum";


?>
