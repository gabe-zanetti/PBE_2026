<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da compra</title>
</head>
<style>
    Body {
Background-color: #7a3939ff;
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
            <td>Nome</td>
            <td>quantidade</td>
            <td>tipo</td>
            <td>filme</td>
            <td>preço do ingresso individual</td>
            <td>preço total</td>
        </tr>
        <tr>
            <?php foreach ($informacoes as $informacao): ?>
            <td><h3><?=$informacao['nome']?></h3></td>
            <?php endforeach ?>
        </tr>
        
    </table>
    <h2>Essas informações estão corretas?</h2>
    <H2>Se sim preencha os dados</H2>
    <br>
    <form action="processa2.php" method="POST">

    <label for="">Tipo de cartão</label>
    <input type="radio" name="cartao" value="mastercard" required>
    <label for="">Mastercard</label>
    <input type="radio" name="cartao" value="banco_brasil">
    <label for="">Banco do Brasil</label>
    <input type="radio" name="cartao" value="Santander">
    <label for="">Santander</label>
    <br>
    <label for="">Numero do cartão</label>
    <input type="number" name="numero_cartao" required>
    <br>
    <label for="">Senha do cartão</label>
    <input type="text" name="senha" required>
    <br>
    <button type="submit">Confirmar</button>
    </form>

    <h2><a href="view.php">Se não clique aqui para voltar a pagina anterior</a></h2>

</body>
</html>