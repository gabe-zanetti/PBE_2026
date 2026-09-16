<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media aluno</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <label for=""> Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="">Nome do filme</label>
        <input type="text" step="0.01" name="nome_filme">
        <br>
        <label for="">Quantidade de ingressos</label>
        <input type="number" step="0.01" name="quantidade_ingressos">
        <br>
        
        <input type="radio" name="tipo" value="inteira">
        <label for="">Inteira</label>
        <input type="radio" name="tipo" value="meia">
        <label for="">Meia entrada</label>
        <br>
        <button type="submit">Comprar!</button>
    </form>
</body>
</html>