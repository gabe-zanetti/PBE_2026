<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto tabela</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>
                Produto
            </td>
            <td>
                Preço
            </td>
            <td>
                Quantidade
            </td>
            <td>
                Subtotal
            </td>
        </tr>
        <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome']?></td> 
                <td><?=$produto['preco']?></td>
                <td><?=$produto['quantidade']?></td>
                <td><?=$produto['subtotal']?></td>
            </tr>
        <?php endforeach ?>

        
    </table>
    <p>total: <?=$total?></p>

        <?php if($total>500):
        $desconto=$total/10;
        $total=$total-$desconto?>
        <?php endif ?>

        <p>desconto:<?=$desconto?></p>
        <p>total com desconto: <?=$total?></p>
</body>
</html>