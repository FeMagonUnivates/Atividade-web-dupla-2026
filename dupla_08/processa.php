<?php

$valor = $_POST['num1'];
$acres = $valor + ($valor * 0.15);

echo 'O valor de R$' . $valor . ' com acrescimo de 15% é de: R$' . $acres;