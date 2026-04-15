<?php

$num = $_POST['num1'];

if ($num > 0) {
    echo "O número " . $num . " é POSITIVO.";
} elseif ($num < 0) {
    echo "O número " . $num . " é NEGATIVO.";
} else {
    echo "O número é igual a: " . $num;
}

echo "<br><br><a href='index.html'>Voltar para o index</a>";

?>