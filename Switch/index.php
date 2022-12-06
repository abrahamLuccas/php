<?php 

$corfav = 'vermelho';

switch($corfav){
    case 'azul':
        echo 'Selecionou azul!';
    break;
    case 'vermelho':
        echo 'Selecionou vermelho!';
    break;
    case 'roxo':
        echo 'Selecionou roxo!';
    break;
    default:
    echo 'não selecionou nenhuma.';
}