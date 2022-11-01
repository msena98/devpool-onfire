<?php

$usuario = 'msena2103@gmail.com';

$posicaoArroba = strpos($usuario, '@', 0);

$substring = substr($usuario, 0, $posicaoArroba);

$quantidadeDeBytes = strlen($substring);

$maiusculo = strtoupper('bytes');
$minusculo = strtolower('bytes');

echo "Usuário: $substring, $quantidadeDeBytes $maiusculo e $minusculo.";