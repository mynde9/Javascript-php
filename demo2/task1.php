<html>
<body>
<?php

include("menu.php");
?>

    <form action="task1.php" method="get">
        <input type="text" name="sk">
        <input type="submit">
    </form>

<?php

if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";

    $skaicius = $_REQUEST["sk"];
    if ($skaicius % 2 == 0) {
        echo "Skaicius yra lyginis";
    } else {
        echo "Skaicius yra nelyginis";
    }
    echo "</atsakymas>";
} ?>
</body>
</html>