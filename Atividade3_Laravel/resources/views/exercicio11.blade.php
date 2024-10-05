<!-- 11.	Crie um formulário que permita ao usuário inserir o raio de um círculo. O programadeve calcular o perímetro do círculo (2πr) e exibir o resultado. -->
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 11</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer11" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="raio" class="form-label">Insira a raio</label>
                <input type="number" class="form-control" id="raio" name="raio" placeholder="Digite a raio"/>
            </div>
                        
            <button type="submit" class="btn btn-primary">Calcular a circunferência do círculo</button>
        </form>
    </div>
</body>
</html>