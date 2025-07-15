<?php

function contarV(string $texto): int {
$texto = strtolower($texto);
 $vogais = ['a', 'e', 'i', 'o', 'u'];
  $contador = 0;

  for ($i = 0; $i < strlen($texto); $i++) {
    if (in_array($texto[$i], $vogais)) {
      $contador++;
    }
  }

  return $contador;
}

$string = "variavel";
$quantidade_vogais = contarV($string);
echo "A string '$string' tem $quantidade_vogais vogais."; 
?>












