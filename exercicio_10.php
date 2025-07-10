<?php
$limite = 10;
$a = 0;
$b = 1;

while ($a <= $limite) {
    echo $a . " ";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}
?>