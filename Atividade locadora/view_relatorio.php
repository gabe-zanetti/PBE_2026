<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de locação</title>
</head>
<body>
    <P>Nome do cliente: <?= $nome?> </P>
    <p>E-mail: <?=$email?></p>
    <p>Data de retirada: <?=$dados_localizacao?> </p>
    <h3>Adicionais:</h3>
    <p>Seguro total:<?= $seguro_total?></p>
    <p>GPS:<?= $gps?></p>
    <p>Cadeirinha Infantil:<?= $cadeirinha_infantil?></p>

    <table>
    <tr>
        <th>Item</th>
        <th>Diária</th>
        <th>Dias</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td><?=$categoria?></td>
        <td><?=$diaria?></td>
        <td><?=$quantidade_dias?></td>
        <td><?=$total?></td>
    </tr>
    <tr>
        <td>Adicionais</td>
        <td><?=$total_adi?></td>
        <td><?=$quantidade_dias?></td>
        <td><?=$total_adi2?></td>
    </tr>
    </table>

    <p><?=$total2?></p>
    <p><?=$desconto?></p>
    <p><?=$total3?></p>
    
</body>
</html>