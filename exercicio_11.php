<?php
$palavra = "caralho";
$inversa = strrev($palavra);

if ($palavra == $inversa) {
    echo "e palindromo.";
} else {
    echo "Nao é palindromo.";
}
?>