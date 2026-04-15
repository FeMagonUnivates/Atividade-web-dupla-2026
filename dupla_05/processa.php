<?php

$celsius = $_POST['celsius'];
$fa = $celsius * 1.8 + 32;

echo "A temperatura de " . $celsius . "°C em Fahrenheit é de: " . $fa . "°F";

echo "<br><br><a href='index.html'>Voltar para o index</a>";

?>