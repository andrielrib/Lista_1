<?php
$numero = 1000;
$pares = 0;
for ($i = 1; $i <= $numero; $i++) {
    if ($i % 2 == 0) {
        $pares++;
    }
}
echo "Existem $pares numeros pares.";


?>