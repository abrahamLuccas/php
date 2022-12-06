<?php

// StdClass objeto

$objeto = new \StdClass(); // classe predefinida vazia, classe padrão de objetos n declarados
$objeto->nome = 'Icaro';
$objeto->sobrenome = 'Jobs';

$teste = [];

//var_dump($objeto); lê objetos

echo gettype($objeto); // fala o tipo