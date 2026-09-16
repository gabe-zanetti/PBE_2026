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
        <label for="">Peso em kilogramas</label>
        <input type="number" step="0.01" name="peso">
        <br>
        <label for="">Altura em metros</label>
        <input type="number" step="0.01" name="altura">
        <br>
        <button type="submit">Calcular IMC!</button>
    </form>
</body>
</html>