<?php
// VALIDAÇÃO MULTIPLA

$_POST = array(
    'nome' => 'Abraham',
    'sobrenome' => null
);

$primeiro = null;
$segundo = 'segundo ok';
$terceiro = null;
$quarto = null;

$resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'não preenchido';

echo $resultado;

 /*
$nome = $_POST['nome'] ?? 'nome não preenchido';
$sobrenome = $_POST['sobrenome'] ?? 'nome não preenchido';

echo "{$nome} <br/>";
echo "{$sobrenome}"; */


/* jeito antigo
    $_POST = array(
        'nome' => 'Abraham',
        'sobrenome' => null
    );

    $nome = '';
    $sobrenome = '';

    if($_POST['nome'] <> null){
        $nome = $_POST['nome'];
    } 
    else{
        $nome = 'não preenchido';
    }

    if($_POST['sobrenome'] <> null) {
        $sobrenome = $_POST['sobrenome'];
    }
    else{
        $sobrenome = 'não preenchido';
    }

    echo "{$nome} <br/>";
    echo "{$sobrenome}";
    */