<?php

$url = 'https://google.com';

$ehUmSiteSeguro = str_starts_with($url, 'https');
$ehUmSiteBrasileiro = str_ends_with($url, 'br');

if ($ehUmSiteSeguro) {
    echo 'É um site seguro.' . PHP_EOL;
} else {
    echo 'Não é um site seguro.' . PHP_EOL;
}

if($ehUmSiteBrasileiro){
    echo 'É um site brasileiro.' . PHP_EOL;
} else {
    echo 'Não é um site brasileiro.' . PHP_EOL;
}