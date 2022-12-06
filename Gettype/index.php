<?php

$nome = 'Abraham';
$idade = 20;
$altura = 1.82;
$formacoes = ['PHP', 'Laravel'];
$cliente = new \StdClass();

echo '$nome: ' . gettype($nome) . '<br/>';
echo '$idade: ' . gettype($idade) . '<br/>';
echo '$altura: ' . gettype($altura) . '<br/>';
echo '$formacoes: ' . gettype($formacoes) . '<br/>';
echo '$cliente: ' . gettype($cliente) . '<br/>';