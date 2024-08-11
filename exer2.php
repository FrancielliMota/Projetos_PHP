<<<<<<< HEAD
<!-- Calcular o salário semanal de um funcionários, com base nas horas trabalhadas e valor da hora; -->

<?php require("cabecalho.php"); ?>

<form action="exer2.php" method="POST">

<h1>Exercício 2</h1>
<h5> Calcule o salário semanal do funcionário:</h5>

<div class="row">

    <div class="col">
        <label for="horas_trabalhadas">Quantidade de horas trabalhadas no mês: </label>
        <input type="text" id="horas_trabalhadas" name="horas_trabalhadas" class="form-control">
    </div>

    <div class="col">
        <label for="valor_horas">Valor da Hora: </label>
        <input type="text" id="valor_horas" name="valor_horas" class="form-control">
    </div>

</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success"> Calcular </button>
    </div>
</div>

</form>

<?php

    function calcularSalario ($horas_trabalhadas, $valor_hr){
        
            $horas_trabalhadas = (float) $horas_trabalhadas;
            $valor_hr = (float) $valor_hr;
            $totalMes = $horas_trabalhadas * $valor_hr;
            $resultado = $totalMes/4.5;
            return $resultado;
        }


    if ($_POST){
   
    $horasTrabalhadas = $_POST['horas_trabalhadas'];
    $valor_hr = $_POST['valor_horas'];

    echo "<h1>O salário semanal é R$ </h1>", calcularSalario($horasTrabalhadas,$valor_hr);
 
}

=======
<!-- Calcular o salário semanal de um funcionários, com base nas horas trabalhadas e valor da hora; -->

<?php require("cabecalho.php"); ?>

<h1>Exercício 2</h1>

<form action="exer2.php" method="POST">


<div class="row">

    <div class="col">
        <label for="horas_trabalhadas">Quantidade de horas trabalhadas no mês: </label>
        <input type="text" id="horas_trabalhadas" name="horas_trabalhadas" class="form-control">
    </div>

    <div class="col">
        <label for="valor_horas">Valor da Hora: </label>
        <input type="text" id="valor_horas" name="valor_horas" class="form-control">
    </div>

</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success"> Calcular </button>
    </div>
</div>

</form>

<?php

    function calcularSalario ($horas_trabalhadas, $valor_hr){
        
            $horas_trabalhadas = (float) $horas_trabalhadas;
            $valor_hr = (float) $valor_hr;
            $totalMes = $horas_trabalhadas * $valor_hr;
            $resultado = $totalMes/4.5;
            return $resultado;
        }


    if ($_POST){
   
    $horasTrabalhadas = $_POST['horas_trabalhadas'];
    $valor_hr = $_POST['valor_horas'];

    echo "<h1>O salário semanal é R$ </h1>", calcularSalario($horasTrabalhadas,$valor_hr);
 
}

>>>>>>> f9f0caca7c010d2432d2a0e32d78551a6a66030c
require("rodape.php"); ?>