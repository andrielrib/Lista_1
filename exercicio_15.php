<?php
$peso = 150; 
$altura = 1.68; 

$imc = $peso / ($altura * $altura);

echo "IMC: $imc<br>";

if ($imc < 18.5) {
    echo "Abaixo do peso.";
} elseif ($imc < 25) {
    echo "Peso normal.";
} elseif ($imc < 30) {
    echo "Sobrepeso.";
} else {
    echo "Obesidade.";
}
?>