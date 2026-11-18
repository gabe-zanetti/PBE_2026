<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO com php</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label>Nome</label>
        <input type="text" id="nome" name="nome">
        <label>Quantidade</label>
        <input type="number" id="quantidade" name="quantidade">
        <label>Preço</label>
        <input type="number" id="preco" name="preco" step="0.01">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>