<!-- Calcular e retornar a quantidade de dias de férias que um funcionário tem direito com base no tempo de serviço na empresa.
Para cada 30 dias trabalhados o funcionário pode receber 1 dia de férias; 
Ele pode no máximo tirar 30 dias de férias, a partir do total de dias de férias informado-->

<?php require("cabecalho.php"); ?>

<form action="exer5.php" method="POST">

<h1>Exercício 5</h1>
<h5> Calcular férias de funcionário: </h5>

    <div class="row">

        <div class="col">
            <label for="nome_func">Nome do Funcionário:</label>
            <input type="text" id="nome_func" name="nome_func" class="form-control">
        </div>

        <div class="col">
            <label for="dias_trabalhados">Qtd de dias trabalhados:</label>
            <input type="text" id="dias_trabalhados" name="dias_trabalhados" class="form-control">
        </div>
    </div>

    <div class="row">

        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>

    </div>

</form>

<?php
function calcularFerias($dias_trabalhados) {
    $diasFerias = floor($dias_trabalhados / 30);
    return $diasFerias;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_func = $_POST['nome_func'];
    $dias_trabalhados = $_POST['dias_trabalhados'];

    
    $diasFerias = calcularFerias($dias_trabalhados);

    if ($diasFerias > 30) {
        $sobra = $diasFerias - 30;
        echo "<h1 class='result'> O funcionário {$nome_func} possui {$diasFerias} dias de férias, mas só está autorizado a 
        tirar 30 dias de férias, sobrando {$sobra} dias para o próximo período.</h1>";
    } else {
        echo "<h1 class='result'>O funcionário {$nome_func} tem direito a {$diasFerias} dias de férias.</h1>";
    }
}

require("rodape.php");
?>