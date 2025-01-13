<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $nome = $_GET["nome"];
    $hora = $_GET["hora"];
    $salario = 22 * 9 * $hora;

    echo "Este é seu salario R$ $salario, aproveite com moderação $nome!";

    ?>

</body>

</html>