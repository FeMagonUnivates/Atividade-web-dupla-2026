<?php

$base = $_POST['base'];
$altura = $_POST['altura'];
$area = $base * $altura;

echo "O retângulo com base " . $base . " e altura " . $altura . " tem uma área de: " . $area . "m².";

echo "<br><br><a href='index.html'>Voltar para o index</a>";

?>