<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media aluno</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <label for=""> Nome do aluno</label>
        <input type="text" name="nome_aluno">
        <br>
        <label for="">primeira nota</label>
        <input type="number" step="0.01" name="primeira_nota">
        <br>
        <label for="">Segunda nota</label>
        <input type="number" step="0.01" name="segunda_nota">
        <br>
        <label for="">Terceira nota</label>
        <input type="number" step="0.01" name="Terceira_nota">
        <br>
        <button type="submit">Calcular media!</button>
    </form>
</body>
</html>