<?php

$altura = 1.59;
$peso   = 62;
$imc    = $peso/$altura**2;

if ($imc < 18.5 ) {
    echo "Você está abaixo do peso, magreza.";
} elseif ($imc > 18.5 && $imc < 24.9 ) {
    echo "Você está com peso normal";
} elseif ($imc > 24.9 && $imc < 29.9 ) {
    echo "Você está acima do peso, sobrepeso";
} elseif ($imc > 30 && $imc < 34.9 ) {
    echo "Você está acima do peso, obesidade grau I";
} elseif ($imc > 35 && $imc < 39.9 ) {
    echo "Você está acima do peso, obesidade grau II";
}  elseif ($imc > 40) {
    echo "Você está muito acima do peso, obesidade grau III";
}