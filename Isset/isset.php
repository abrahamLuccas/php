<?php

$nome = 'Abraham';
$idade = '20';
$formacoes = array();
$ultimavisu = null;

echo $nome . '<br/>';
echo $idade . '<br/>';

echo isset($ultimavisu) . '<br/>'; // false

echo empty($formacoes); // true
/* 
Sempre usar empty() ou !empty() para verificar se o array
está vazio ou possui algum valor
*/

