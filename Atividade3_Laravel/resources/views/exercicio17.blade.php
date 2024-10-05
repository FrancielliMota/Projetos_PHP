<!--Crie um formulário que permita ao usuário inserir um capital, uma taxa de juros e um período.
 O programa deve calcular os juros simples (capital * taxa * período) e exibir o resultado.  -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 17</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer17" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="capital" class="form-label">Insira o capital</label>
                <input type="number" class="form-control" id="capital" name="capital" step="0.01" required placeholder="Digite o capital"/>
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">Insira a taxa</label>
                <input type="number" class="form-control" id="taxa" name="taxa" step="0.01" required placeholder="Digite a taxa"/>
            </div> 
            <div class="mb-3">
                <label for="periodo" class="form-label">Insira a periodo em meses</label>
                <input type="number" class="form-control" id="periodo" name="periodo" step="0.01" required placeholder="Digite a periodo em meses"/>
            </div>               
            <button type="submit" class="btn btn-primary">Calcular os juros do período</button>
        </form>
    </div>
</body>
</html>