<?php

$nome = 'Matheus Nunes Sena';

$ehDaMinhaFamilia = str_contains($nome, 'Sena');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família.";
} else {
    echo "$nome não é da minha família.";
}