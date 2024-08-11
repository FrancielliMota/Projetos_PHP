<!-- Distribuir um bônus anual entre os funcionários com base em seu desempenho;
Ler o valor dos lucros da empresa a serem distribuídos, o nome do funcionário e uma escala de 1 a 5;
Switch case: onde 1 está relacionado a 0,1% de recebimento do lucro e 5 está relacionado ao recebimento de 0,7% do lucro.  
-->

<?php require("cabecalho.php"); ?>


<form action="exer3.php" method="POST">
<h1>Exercício 3</h1>
<h5> Calcule o bônus anual conforme desempenho do funcionário</h5>

<div class="row">

    <div class="col">
        <label for="valor_lucro">Informe o valor dos lucros: </label>
        <input type="text" id="valor_lucro" name="valor_lucro" class="form-control">
    </div>

    <div class="col">
        <label for="nome_func">Informe o nome do funcionário: </label>
        <input type="text" id="nome_func" name="nome_func" class="form-control">
    </div>

    <div class="col">
        <label for="nota_func">Numa escala de 1 a 5. Informe o desempenho do funcionário: </label>
        <input type="text" id="nota_func" name="nota_func" class="form-control">
    </div>

</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success"> Calcular </button>
    </div>
</div>

</form>

<?php
 function calcularBonus($valor_lucro, $nota_func) {

    $valor_lucro = (float)$valor_lucro;
    $nota_func = (float)$nota_func;

    
    switch ($nota_func) {
        case 1:
            $percentual_bonus = 0.1;
            break;
        case 2:
            $percentual_bonus = 0.25;
            break;
        case 3:
            $percentual_bonus = 0.4;
            break;
        case 4:
            $percentual_bonus = 0.55;
            break;
        case 5:
            $percentual_bonus = 0.7;
            break;
        default:
            echo "<p>O dado informado é inválido!</p>";
            return 0;
    }

    $resultado = $valor_lucro * $percentual_bonus;
    return number_format($resultado, 2, ',', '.'); 
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor_lucro = $_POST['valor_lucro'];
    $nome_func = $_POST['nome_func'];
    $nota_func = $_POST['nota_func'];

    echo "<h1 class='result'>O bônus anual para o Sr(a) {$nome_func} é R$: " . calcularBonus($valor_lucro, $nota_func) . "</h1>";
}
require("rodape.php"); ?>