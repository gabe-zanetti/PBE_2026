<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    Body {
Background-color: #7a3939ff;
}
    a {
  color: #dc2323ff;
}
    h2, form {
        color: #ffffff
    }

    table, th, td {
  border: 1px solid white;
}
</style>
<body>
    <h2>Insira as informações abaixo para comprar!</h2>
    <form action="processa.php" method="POST">
        <label for="">Seu nome</label>
        <input type="text" name="nome_cliente" required>
        <br>
        <label for="">Tipo de ingresso</label>
        <input type="radio" name="tipo" value="inteira" required>
        <label for="">Inteira</label>
        <input type="radio" name="tipo" value="meia">
        <label for="">Meia</label>
        <br>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade" required>
        <br>
        <label for="">Filme</label>
        <input type="radio" name="filme" value="coracao_selvagem" required>
        <label for="">Coração Selvagem</label>
        <input type="radio" name="filme" value="homem_aranha">
        <label for="">Homem Aranha</label>
        <input type="radio" name="filme" value="vingadores">
        <label for="">Vingadores</label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>