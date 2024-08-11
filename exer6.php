<!-- Calcular os custos de um projeto com base nas horas previstas, taxa por hora dos funcionários e custos adicionais. 
Custo de Mão de Obra = horasPrevistas * taxaHora;
Custo Total do Projeto = custoMaoObra + custoAdicional; -->

<?php require("cabecalho.php"); ?>

<form action="exer6.php" method="POST">

<h1>Exercício 6</h1>
<h5> Calcular custos de determinado projeto: </h5>

<div class="row">

    <div class="col">
        <label for="horasPrevistas">Horas Previstas: </label>
        <input type="text" id="horasPrevistas" name="horasPrevistas" class="form-control">
    </div>

    <div class="col">
        <label for="taxaHora">Taxa por hora R$: </label>
        <input type="text" id="taxaHora" name="taxaHora" class="form-control">
    </div>

    <div class="col">
        <label for="custoAdicional">Custo Adicional R$: </label>
        <input type="text" id="custoAdicional" name="custoAdicional" class="form-control">
    </div>

    <div class="col">
        <label for="opcao">Selecione a opção desejada:</label>
        <select name="opcao" id="opcao" class="form-control">
            <option value="mao">Calcular Custo da Mão de Obra</option>
            <option value="total">Calcular Custo Total</option>
        </select>
    </div>

</div>
<div class="row">

    <div class="col">
        <button type="submit" class="btn btn-success"> Calcular </button>
    </div>

</div>
</form>

<?php

function calcularMaodeObra($horasPrevistas, $taxaHora) {
    $horasPrevistas = (float)$horasPrevistas;
    $taxaHora = (float)$taxaHora;
    $custoMao = $horasPrevistas * $taxaHora;
    
    return $custoMao;
}

function calcularCustoTotal($custoMao, $custoAdicional) {
    $custoAdicional = (float)$custoAdicional;
    $custoMao = (float)$custoMao;
    return $custoMao + $custoAdicional;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $custoAdicional = $_POST['custoAdicional'];
    $taxaHora = $_POST['taxaHora'];
    $horasPrevistas = $_POST['horasPrevistas'];
    $opcao = $_POST['opcao'];
    
    if ($opcao == "mao") {
        $custoMao = calcularMaodeObra($horasPrevistas, $taxaHora);
        echo "<h1 class='result'>O custo de mão de obra é igual a: R$ {$custoMao}</h1>";

    } elseif ($opcao == "total") {
        $custoMao = calcularMaodeObra($horasPrevistas, $taxaHora);
        $custoTotal = calcularCustoTotal($custoMao, $custoAdicional);
        echo "<h1 class='result'>O custo total do projeto é igual a: R$ {$custoTotal}</h1>";
    }
}

require("rodape.php"); ?>