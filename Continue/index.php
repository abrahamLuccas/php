<?php

$nomes = ['Abraham', 'Luccas', 'Thiago', 'Sam'];
$resultado = [];

foreach($nomes as $key => $value) 
{
    if( !($key % 2) ){
        continue;
        //pula os pares e pega apenas impares
    }    

    array_push($resultado, $value); 
    /*coloca elementos dentro do array, alimenta resultado com value */
}

var_dump($resultado);