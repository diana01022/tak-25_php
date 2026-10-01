<form method="get">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <input type="number" name="number3">

    <button type="submit">Leia maksimum</button>
</form>

<?php

if (isset($_GET["number1"]) && isset($_GET["number2"]) && isset($_GET["number3"])) {

    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $number3 = $_GET["number3"];

    if ($number1 >= $number2 && $number1 >= $number3) {
        echo "Maksimum on: " . $number1;
    } elseif ($number2 >= $number1 && $number2 >= $number3) {
        echo "Maksimum on: " . $number2;
    } else {
        echo "Maksimum on: " . $number3;
    }
}

?>