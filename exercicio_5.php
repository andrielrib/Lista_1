<?php
$num1 = 220;
$num2 = 284;

function somaDivisores($num)
{
    $soma = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

if (somaDivisores($num1) == $num2 && somaDivisores($num2) == $num1) {
    echo "Sao numeros amigos.";
} else {
    echo "Nao sao numeros amigos.";
}

