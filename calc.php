<?php 
$nome = $_GET["nome"];
$hora = $_GET["hora"];
$salario = 22 * 9 * $hora;

echo "Este é seu salario R$ $salario, aproveite com moderação $nome!";

?>