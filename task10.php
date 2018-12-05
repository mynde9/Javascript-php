<html>
<body>
<?php
include("fragments/menu.php");
?>
<form action="task10.php" method="get">
    Pirmas Skaicius: <input type="text" name="number1"><br>
    Antras Skaicius: <input type="text" name="number2"><br>
    <input type="radio" name="calc" value="sudetis"> Suma<br>
    <input type="radio" name="calc" value="skirtumas"> Skirtumas<br>
    <input type="radio" name="calc" value="daugyba"> Sandauga<br>
    <input type="radio" name="calc" value="dalyba"> Dalyba<br>
    <input type="submit">
</form>

<?php

if (isset($_REQUEST['number1']) && isset($_REQUEST['number2']) && isset($_REQUEST['calc'])) {
    $pirmas = $_REQUEST["number1"];
    $antras = $_REQUEST["number2"];
    $calc = $_REQUEST["calc"];

    if ($calc == "sudetis") {
        echo "Suma:" . ($pirmas + $antras);
    } elseif ($calc == "skirtumas") {
        echo "Skirtumas:" . ($pirmas - $antras);
    } elseif ($calc == "daugyba") {
        echo "Sandauga:" . ($pirmas * $antras);
    } elseif ($calc == "dalyba") {
        echo "Dalyba:" . ($pirmas / $antras);
    }
}

?>


</body>
</html>
