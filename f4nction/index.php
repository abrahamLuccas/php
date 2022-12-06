<?php


//dump and die
function dd($variavel) {
    echo '<prev>';
    print_r($variavel);
    echo '</prev>';
    die();
}

$nomes = ['abraham', 'luccas'];
dd($nomes);