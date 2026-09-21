<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ringi arvutamine</title>
</head>

<body>

<h1>Ringi pindala ja ümbermõõt</h1>

<form method="get">
    <label for="raadius">Sisesta raadius:</label>
    <input type="number" name="raadius" id="raadius" step="0.01">

    <input type="submit" value="Arvuta">
</form>

<?php

if (isset($_GET["raadius"])) {

    $raadius = $_GET["raadius"];

    $pindala = pi() * $raadius ** 2;
    $umbermoot = 2 * pi() * $raadius;

    echo "<p>Ringi pindala: " . round($pindala, 2) . "</p>";
    echo "<p>Ringi ümbermõõt: " . round($umbermoot, 2) . "</p>";
}

?>

</body>
</html>

