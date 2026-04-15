<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nomecompleto = $nome . " " . $sobrenome;

echo 'O nome completo é: ' . $nomecompleto;