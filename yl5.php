<form method="get">
    <input type="number" name="a" min="0" max="1" placeholder="A">
    <input type="number" name="b" min="0" max="1" placeholder="B">
    <input type="number" name="c" min="0" max="1" placeholder="C">

    <button type="submit">Arvuta</button>
</form>

<?php

if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {

    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    // A AND (B OR C)
    $result1 = $a && ($b || $c);

    // (A ~ B) OR NOT(C AND A)
    $result2 = ($a == $b) || !($c && $a);

    echo "A AND (B OR C) = " . $result1 . "<br>";
    echo "(A ~ B) OR NOT(C AND A) = " . $result2;
}

?>