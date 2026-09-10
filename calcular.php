<?php

$nome = $_POST['tnome'];
$anoNasc = (int) $_POST['tano'];
$anoAtual = (int) date('Y');

$idade = $anoAtual - $anoNasc;



$diasVividos = $idade * 365;
$horasVividas = $diasVividos * 24;
$minutosVividos = $horasVividas * 60;



$bpmMedio = $minutosVividos * 75;
$respiracoesTotais = $minutosVividos * 15;


$expectativaVida = 95;

$anosRestantes = $expectativaVida - $idade;

$minutosRestantes = $anosRestantes * 365 * 24 * 60;

$batimentosRestantes = $minutosRestantes * 75;
$respiracoesRestantes = $minutosRestantes * 17;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de Vida</title>
</head>

<body>

    <h1>Tempo de vida</h1>
    <hr>

    <h2>
        <?php echo $nome; ?>, sua idade é:
        <?php echo $idade; ?> anos
    </h2>
<h2>
    <p>
        Você já viveu aproximadamente
        <?php echo number_format($diasVividos, 0, ',', '.'); ?> dias.
    </p>

    <p>
        Você já viveu aproximadamente
        <?php echo number_format($horasVividas, 0, ',', '.'); ?> horas.
    </p>

    <p>
        Você já viveu aproximadamente
        <?php echo number_format($minutosVividos, 0, ',', '.'); ?> minutos.
    </p>

    <p>
        Seu coração já bateu aproximadamente
        <?php echo number_format($bpmMedio, 0, ',', '.'); ?> vezes.
    </p>

    <p>
        Você já respirou aproximadamente
        <?php echo number_format($respiracoesTotais, 0, ',', '.'); ?> vezes.
    </p>

    <p>
        Sua expectativa de vida considerada é de
        <?php echo $expectativaVida; ?> anos.
    </p>

    <p>
        Até os <?php echo $expectativaVida; ?> anos, ainda restam aproximadamente
        <?php echo $anosRestantes; ?> anos.
    </p>

    <p>
        Até os <?php echo $expectativaVida; ?> anos, ainda restam aproximadamente
        <?php echo number_format($batimentosRestantes, 0, ',', '.'); ?>
        batimentos cardíacos.
    </p>

    <p>
        Até os <?php echo $expectativaVida; ?> anos, ainda restam aproximadamente
        <?php echo number_format($respiracoesRestantes, 0, ',', '.'); ?>
        respirações.
    </p>
</h2>
</body>

</html>
