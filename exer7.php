<!-- Avaliar o desempenho de um projeto ao longo do tempo com base no progresso das tarefas, prazos e produtividade dos funcionários.
Prazo para a finalização do projeto;
Tarefas = Quantas atividades foram estabelecidas para o projeto;
Produtividade: Quantas atividades já foram desenvolvidas e Quantas atividades a equipe do projeto consegue desenvolver por dia. -->

<?php require("cabecalho.php"); ?>

<form action="exer7.php" method="POST">
<h1>Exercício 7</h1>
<h5> Avaliar desempenho do projeto: </h5>

<div class="row">

    <div class="col">
        <label for="prazo">Prazo para o projeto (dias): </label>
        <input type="text" id="prazo" name="prazo" class="form-control">
    </div>

    <div class="col">
        <label for="atvTotal">Qtd de atividades: </label>
        <input type="text" id="atvTotal" name="atvTotal" class="form-control">
    </div>

    <div class="col">
        <label for="atvConcluidas">Nº de Atividades concluídas: </label>
        <input type="text" id="atvConcluidas" name="atvConcluidas" class="form-control">
    </div>

    <div class="col">
        <label for="capacidadeDiaria">Nº de atividades que a equipe consegue desenvolver POR DIA ?: </label>
        <input type="text" id="capacidadeDiaria" name="capacidadeDiaria" class="form-control">
    </div>

</div>
<div class="row">

    <div class="col">
        <button type="submit" class="btn btn-success"> Calcular </button>
    </div>

</div>
</form>

<?php
function avaliarDesempenho($prazo, $atvTotal, $capacidadeDiaria, $atvConcluidas) {

    $metaDiaria = $atvTotal / $prazo; // Progresso diário ideal

    for ($dia = 1; $dia <= $prazo; $dia++) {
        $atvConcluidas += $capacidadeDiaria;

        if ($atvConcluidas >= $atvTotal) {
            $atvConcluidas = $atvTotal;
            echo "Dia $dia: Atividades Concluídas = " . $atvConcluidas . "<br>";
            echo "<h1 class='result'>Parabéns! O projeto foi concluído no prazo.\n</h1> <br>";
            break; 
        }

        echo "Dia $dia: Atividades Concluídas = " . $atvConcluidas . "\n<br>";
    }

    if ($atvConcluidas < $atvTotal) {
        echo "<h1 class='result'>Atenção! O projeto não foi concluído no prazo.</h1>\n";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prazo = $_POST['prazo'];
    $atvTotal = $_POST['atvTotal'];
    $atvConcluidas = $_POST['atvConcluidas'];
    $capacidadeDiaria = $_POST['capacidadeDiaria'];

    avaliarDesempenho($prazo, $atvTotal, $capacidadeDiaria, $atvConcluidas);
}

require("rodape.php"); ?>