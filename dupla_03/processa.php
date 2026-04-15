<?php

$num = $_POST['num1'];

for($i = 1; $i <= 10; $i++) {
    echo $i . " x " . $num . " = " . $i * $num . "<br>";
}

echo "<br><a href='index.html'>Voltar para o index</a>";

?>