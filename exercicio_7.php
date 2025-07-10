<?php
$numero = 28;
$soma = 0;

for ($i = 1; $i < $numero; $i++) {
 if ($numero % $i ==0) {

    $soma += $i;

 }   
}
if ($soma == $numero) {
   echo "numero daora.";
} else {
    echo "numero nao é daora.";
}
?>