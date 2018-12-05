<html>
<body>
<?php

include("menu.php");
?>

<form action="task2.php" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>

<?php

if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";

    $skaicius = $_REQUEST["sk"];
    if ($skaicius % 3 == 0) {
        echo "Dalijasi is 3" . "<br>";
    } if ($skaicius %5 == 0){
        echo "Dalijasi is 5" . "<br>";
    } if ($skaicius %7 == 0){
        echo "Dalijasi is 7";
    }

    echo "</atsakymas>";
} ?>
</body>
</html>