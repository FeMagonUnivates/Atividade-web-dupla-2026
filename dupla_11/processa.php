<?php

$preco = $_POST['preco'];
$desconto = $preco - ($preco * 0.10);

echo "O produto com o preço de R$" . $preco . " com desconto de 10%, custa R$" . $desconto;

echo "<br><br><a href='index.html'>Voltar para o index</a>";

?>