<!-- 
Verificar se um funcionário pode fazer tal tarefa.
Em um formulário, leia:
    - os dados de uma tarefa de um projeto (nome da tarefa, total de horas da tarefa e complexidade – alta, média e baixa).
    - os dados do funcionário candidato a realizar essa tarefa
    (nome, total de horas disponíveis de trabalho e nível de experiência – júnior, pleno ou sênior).
A resposta para o cálculo deve seguir a seguinte lógica: 
a.	Um funcionário só pode realizar uma tarefa se tiver disponibilidade de tempo maior do que o solicitado na tarefa em ao menos 10%; 
b.	Funcionários com nível de experiência júnior podem assumir apenas tarefas de complexidade baixa; 
c.	Funcionários com nível de experiência pleno podem assumir apenas tarefas de complexidade baixa e média; 
d.	Funcionários com nível de experiência sênior podem assumir apenas tarefas de complexidade média e alta.  -->

<?php require("cabecalho.php"); ?>

<form action="exer4.php" method="POST">
    
<h1>Exercício 4</h1>
<h5> Avaliar perfil do funcionário para determinada tarefa: </h5>


    <div class="row">
        
        <div class="col">
            <label for="nome_tarefa">Nome da tarefa:</label>
            <input type="text" id="nome_tarefa" name="nome_tarefa" class="form-control">
        </div>

        <div class="col">
            <label for="total_horas">Total de horas:</label>
            <input type="text" id="total_horas" name="total_horas" class="form-control">
        </div>

        <div class="col">
            <label for="complexidade">Selecione a complexidade:</label>
            <select name="complexidade" id="complexidade" class="form-control">
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>

        <div class="col">
            <label for="nome_func">Nome do Funcionário:</label>
            <input type="text" id="nome_func" name="nome_func" class="form-control">
        </div>
        
        <div class="col">
            <label for="hrs_dev_disp">Total de horas disponíveis:</label>
            <input type="text" id="hrs_dev_disp" name="hrs_dev_disp" class="form-control">
        </div>

        <div class="col">
            <label for="experiencia">Experiência:</label>
            <select name="experiencia" id="experiencia" class="form-control">
                <option value="junior">Junior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>
<?php

function calcularDisponibilidadeTempo($hrs_dev_disp, $total_horas) {
    $hrs_dev_disp = (float) $hrs_dev_disp;
    $total_horas = (float) $total_horas;
    $percentual = 0.10 * $hrs_dev_disp;
    $somapercentual = $hrs_dev_disp + $percentual;
    
    return $somapercentual >= $total_horas;
}

function obterComplexidade($experiencia) { 
    switch ($experiencia) {
        case 'junior':
            return ['baixa'];
        case 'pleno':
            return ['baixa', 'media'];
        case 'senior':
            return ['media', 'alta'];
        default:
            return [];
    }
}


function verificarComplexidade($experiencia, $complexidade) { // Receber o nível de experiência e a complexidade da tarefa.
    $opcoesPermitidas = obterComplexidade($experiencia); 
    return in_array($complexidade, $opcoesPermitidas); //Buscar quais complexidades são permitidas para esse nível de experiência.
    //Retornar true se a tarefa é adequada para o funcionário, ou false caso contrário.
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_tarefa = $_POST['nome_tarefa'];
    $total_horas = $_POST['total_horas'];
    $nome_func = $_POST['nome_func'];
    $hrs_dev_disp = $_POST['hrs_dev_disp'];
    $experiencia = $_POST['experiencia'];
    $complexidade = $_POST['complexidade'];
   
    if (calcularDisponibilidadeTempo($hrs_dev_disp, $total_horas) && verificarComplexidade($experiencia, $complexidade)) {
        echo "<h1 class='result'> AUTORIZADO! O funcionário {$nome_func} possui os critérios necessários para a tarefa {$nome_tarefa}</h1>";
    } else {
        echo "<h1 class='result'> O funcionário {$nome_func} NÃO ESTÁ AUTORIZADO para a tarefa {$nome_tarefa}</h1>";
    }
}

require("rodape.php");
?>