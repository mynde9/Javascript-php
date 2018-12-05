<html>
<head>
    <?php
    // pradedam php sesija
    session_start();
    include("menu.php");
    ?>
</head>
<body>
<form action="#" method="get">
    <input type="text" name="zodis"><br>
    <input type="checkbox" name="clean">Valyti sesija <br>
    <input type="submit">
</form>
<?php
// sesijos kintamajam "sakinys" duodama pradine reiksme
if (!isset($_SESSION["sakinys"])) {
    $_SESSION["sakinys"] = "";
}
if (isset($_REQUEST["zodis"])) {
    echo "<atsakymas>";
    // pasiimam zodi is request
    $zodis = $_REQUEST["zodis"];
    if ($zodis != "pabaiga") {
        // jeigu zodis ne pabaiga, prideti prie sesijos kintamojo zodi ir ji parodyti
        $_SESSION["sakinys"] .= "$zodis ";
        echo $zodis;
    } else {
        // jeigu zodis pabaiga, parodyti kas saugoma sesijos sakinyje
        echo $_SESSION["sakinys"];
    }
    echo "</atsakymas>";
}
// sesijos isvalymo galimybe
// jeigu buvo uzdeta varnele
// sesijos sakini padaryti tusciu
if (isset($_REQUEST["clean"]) && $_REQUEST["clean"] == "on") {
    $_SESSION["sakinys"] = "";
}
?>
</body>
</html>