<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Processa.php" method="POST"> 
            <label for="">Nome do funcionario:</label>
            <input type="text" name="nome_funcionario">
            <br>
            <label for="">Valor bruto:</label>
            <input type="number" name="valor_bruto">
            <br>
            <label for="">quantidade de horas extras:</label>
            <input type="number" name="horas_extras">
            <br>
            <label for="">quantidade total dos beneficios:</label>
            <input type="number" name="beneficios">
            <br>
            <label for=""> quantidade total de descontos</label>
            <input type="number" name="descontos">
            <br>
            <button type="subtmit">Enviar</button>
</body>
</html>