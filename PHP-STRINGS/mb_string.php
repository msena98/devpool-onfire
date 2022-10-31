<?php

$usuario = 'msena2103@gmail.com';

$posicaoArroba = strpos($usuario, '@', 0);

$substring = substr($usuario, 0, $posicaoArroba);

$quantidadeDeBytes = strlen($substring);

$maiusculo = strtoupper('bytes');
$minusculo = strtolower('bytes');

$stringMultibyte = 'Olá!';

$quantidadeDeBytes = strlen($stringMultibyte);

$mbMaiusculo = strtoupper($stringMultibyte);
$mbMinusculo = strtolower($stringMultibyte);

echo "String: $stringMultibyte, $quantidadeDeBytes $mbMaiusculo e $mbMinusculo." . PHP_EOL;


//Usando "mb" para especificar que se trata de uma string multibyte

$quantidadeDeBytes = mb_strlen($stringMultibyte);

$mbMaiusculo = mb_strtoupper($stringMultibyte);
$mbMinusculo = mb_strtolower($stringMultibyte);

echo "String: $stringMultibyte, $quantidadeDeBytes $mbMaiusculo e $mbMinusculo." . PHP_EOL;
