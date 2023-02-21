<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <form action="/api/produto" method="POST">
        @csrf
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome do produto" name="nome"><br>
        <label>Valor: </label>
        <input type="text" placeholder="Digite o valor do produto" name="valor"><br>
        <label>Loja_Id: </label>
        <input type="text" placeholder="Digite o id da loja" name="loja_id"><br>
        <label>Ativo: </label>
        <input type="text" placeholder="O produto ainda está ativo?" name="ativo"><br>
        <label>Estoque: </label>
        <input type="text" placeholder="Digite a quantidade em estoque" name="estoque"><br>
        <button>CADASTRAR</button>
    </form>
</body>

</html>
