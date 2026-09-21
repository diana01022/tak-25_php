<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kroonide teisendamine eurodeks</title>
</head>

<body>

<h1>Kroonide teisendamine eurodeks</h1>

<form method="get">
    <label for="kroonid">Sisesta summa kroonides:</label>
    <input type="number" name="kroonid" id="kroonid" step="0.01">

    <input type="submit" value="Arvuta">
</form>

<?php

if (isset($_GET["kroonid"])) {

    $kroonid = $_GET["kroonid"];

    $eurod = $kroonid / 15.6466;

    $tulemus = round($eurod, 2);

    echo "<p>$kroonid krooni = $tulemus eurot</p>";
}

?>

</body>
</html>