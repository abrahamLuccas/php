<?php

$cpf = '';
$cnpj = '12465874';

$tipodoc = ($cpf <> '') ? 'CPF' : 'CNPJ';

echo $tipodoc;


