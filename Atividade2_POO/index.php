<?php
include 'Ponto.php';

$ponto1 = null;
$ponto2 = null;
$distanciaEntreObjetos = null;
$distanciaEntreCoordenadas = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x1 = (float)$_POST['x1'];
    $y1 = (float)$_POST['y1'];
    $x2 = (float)$_POST['x2'];
    $y2 = (float)$_POST['y2'];

    // Criação dos pontos
    $ponto1 = new Ponto($x1, $y1);
    $ponto2 = new Ponto($x2, $y2);

    // Cálculo das distâncias
    $distanciaEntreObjetos = $ponto1->calcularDistanciaOutroPonto($ponto2);
    $distanciaEntreCoordenadas = Ponto::calcularDistanciaEntrePontos($x1, $y1, $x2, $y2);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Distância entre Pontos</title>
</head>
<body>
    <h1>Calcular Distância entre Dois Pontos</h1>
    <form method="post">
        <h2>Ponto 1</h2>
        <label for="x1">Coordenada X1:</label>
        <input type="number" step="any" name="x1" required>
        <br>
        <label for="y1">Coordenada Y1:</label>
        <input type="number" step="any" name="y1" required>
        <br>
        <h2>Ponto 2</h2>
        <label for="x2">Coordenada X2:</label>
        <input type="number" step="any" name="x2" required>
        <br>
        <label for="y2">Coordenada Y2:</label>
        <input type="number" step="any" name="y2" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($ponto1 && $ponto2): ?>
        <h2>Resultados</h2>
        <p>Ponto 1: (<?= $ponto1->getX() ?>, <?= $ponto1->getY() ?>)</p>
        <p>Ponto 2: (<?= $ponto2->getX() ?>, <?= $ponto2->getY() ?>)</p>
        <p>Distância entre os objetos: <?= $distanciaEntreObjetos ?></p>
        <p>Distância entre as coordenadas: <?= $distanciaEntreCoordenadas ?></p>
        <p>Número total de objetos criados: <?= Ponto::getContador() ?></p>
    <?php endif; ?>
</body>
</html>
