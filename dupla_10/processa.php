<?php

$ano = $_POST['ano'];
$idade = 2026 - $ano;

echo "A idade é de: " . $idade . " anos<br>";

if ($idade >= 18) {
    echo "É de maior";
} else {
    echo "É de menor";
}