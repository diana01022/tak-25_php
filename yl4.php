<form method="get">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <button type="submit">Leia miinimum</button>
</form>

<?php

if (isset($_GET["number1"]) && isset($_GET["number2"])) {

    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];

    if ($number1 < $number2) {
        echo "Miinimum on: " . $number1;
    } else {
        echo "Miinimum on: " . $number2;
    }
}

?>