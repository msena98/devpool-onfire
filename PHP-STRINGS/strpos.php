<?php

$usuario = 'msena2103@gmail.com';

$posicaoArroba = strpos($usuario, '@', 0);

$substring = substr($usuario, 0, $posicaoArroba);

echo "Usuário: $substring";