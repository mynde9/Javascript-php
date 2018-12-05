<?php

include ("fragments/menu.php");

$GLOBALS["a"] = $_REQUEST["a"];
$GLOBALS["b"] = $_REQUEST["b"];

function skaic(){
    $test = duomenys();
    echo "Kuro sunaudojimas 100km: $test";

}

function duomenys(){
    return $GLOBALS["b"] * 100 / $GLOBALS["a"];
}
skaic();