<?php

include ("fragments/menu.php");

$a = $_REQUEST["a"];

$b = $_REQUEST["b"];

$sum = $b / ($a * $a);
echo "Kuno mases indeksas: $sum";


?>