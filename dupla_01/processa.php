<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$media = ($num1 + $num2) / 2;

echo "A média das notas é: " . $media . "<br>";

echo "<a href='index.html'>Voltar para o index</a>";

?>