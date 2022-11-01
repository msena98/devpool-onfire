<?php

$usuario = 'msena2103@gmail.com';

$posicaoArroba = strpos($usuario, '@', 0);

$substring = substr($usuario, 0, $posicaoArroba);

$quantidadeDeBytes = strlen($substring);

echo "Usuário: $substring, $quantidadeDeBytes bytes.";