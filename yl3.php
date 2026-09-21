<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Arvutamine</title>
</head>

<body>

<h1>n + nn + nnn</h1>

<form method="get">
    <label for="n">Sisesta täisarv 1-9:</label>
    <input type="number" name="n" id="n" min="1" max="9">

    <input type="submit" value="Arvuta">
</form>

<?php

if (isset($_GET["n"])) {

    $n = $_GET["n"];

    $nn = $n . $n;
    $nnn = $n . $n . $n;

    $tulemus = $n + $nn + $nnn;

    echo "<p>$n + $nn + $nnn = $tulemus</p>";
}

?>

</body>
</html>