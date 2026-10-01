<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <label for="">Seu nome</label>
        <input type="text" name="nome_cliente">
        <br>
        <h2>Primeiro produto</h2>
        <label for="">Nome</label>
        <input type="text" name="nome_produto1">
        <br>
        <label for="">Preço</label>
        <input type="number" step="0.01" name="preco_produto1">
        <br>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade_produto1">
        <br>
        <h2>Segundo Produto</h2>
        <label for="">Nome</label>
        <input type="text" name="nome_produto2">
        <br>
        <label for="">Preço</label>
        <input type="number" step="0.01" name="preco_produto2">
        <br>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade_produto2">
        <br>
        <h2>Terceiro produto</h2>
        <label for="">Nome</label>
        <input type="text" name="nome_produto3">
        <label for="">Preço</label>
        <input type="number" step="0.01" name="preco_produto3">
        <br>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade_produto3">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>