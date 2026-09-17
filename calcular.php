<?php

$n1 = (float) $_POST["n1"];
$n2 = (float) $_POST["n2"];

$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$potencia = $n1 ** $n2;
$concatenacao = (string) $n1 . (string) $n2;

if ($n2 != 0) {
    $divisao = $n1 / $n2;
    $modulo = $n1 % $n2;
} else {
    $divisao = "Não é possível dividir por zero.";
    $modulo = "Não é possível calcular o módulo por zero.";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div>

<h1>Resultado das Operações</h1>

<hr>

<?php

echo "<p>Soma (+): $n1 + $n2 = $soma</p>";

echo "<p>Subtração (-): $n1 - $n2 = $subtracao</p>";

echo "<p>Multiplicação (*): $n1 * $n2 = $multiplicacao</p>";

echo "<p>Divisão (/): $n1 / $n2 = $divisao</p>";

echo "<p>Resto da divisão (%): $n1 % $n2 = $modulo</p>";

echo "<p>Potência (**): $n1 ** $n2 = $potencia</p>";

echo "<p>Concatenação (.): $n1 . $n2 = $concatenacao</p>";

?>

<hr>

<a href="index.php">Voltar</a>

</div>
</body>
</html>
