<html>
<body>
<?php
include("menu.php");
?>

<form action="task6.php" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>



<?php

if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";
    $sk = $_REQUEST["sk"];
    $masyvas = explode(",", $sk);
    foreach ($masyvas as $zodis) {
        echo "$zodis <br>";
    }
    echo "</atsakymas>";
}
?>
</body>
</html>