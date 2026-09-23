<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da compra</title>
</head>
<style>
    Body {
Background-color: #7a2d2dff;
}
    a {
  color: #dc2323ff;
}
    h2, h3, form {
        color: #ffffff
    }

    table, th, td {
  border: 1px solid white;
}
</style>
<body>
    <table>
        <tr>
            <td><h3>Nome</h3></td>
            <td><h3>Tipo de ingresso</h3></td>
            <td><h3>Quantidade</h3></td>
            <td><h3>filme escolhido</h3></td>
            <td><h3>Preço total</h3></td>
        </tr>
        <tr>
            <td><h3><?=$nome_cliente?></h3></td>
            <td><h3><?=$tipo?></h3></td>
           <td><h3><?=$quantidade?></h3></td>
            <td><h3><?=$filme?></h3></td>
            <td><h3><?=$preco_total?></h3></td>
        </tr>
    </table>
    <h2>Essas informações estão corretas?</h2>
    <H2>Se sim preencha os dados</H2>
    <br>
    <form action="processa2.php" method="POST">

    <label for="">Tipo de cartão</label>
    <input type="radio" name="cartao" value="mastercard">
    <label for="">Mastercard</label>
    <input type="radio" name="cartao" value="banco_brasil">
    <label for="">Banco do Brasil</label>
    <input type="radio" name="cartao" value="Santander">
    <label for="">Santander</label>
    <br>
    <label for="">Numero do cartão</label>
    <input type="number" name="numero_cartao">
    <br>
    <label for="">Senha do cartão</label>
    <input type="text" name="senha">
    <br>
    <button type="submit">Confirmar</button>
    </form>

    <h2><a href="view.php">Se não clique aqui para voltar a pagina anterior</a></h2>

</body>
</html>