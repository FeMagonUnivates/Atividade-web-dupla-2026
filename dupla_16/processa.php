<?php

$valor = $_POST['valor'];
$pessoas = $_POST['pessoas'];
$contadividida = $valor / $pessoas;

echo 'O valor de R$' . $valor . ' dividido entre ' . $pessoas . ' pessoas é de: R$' . $contadividida;