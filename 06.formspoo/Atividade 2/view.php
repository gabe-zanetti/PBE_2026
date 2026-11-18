<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO com php</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label>Nome do aluno</label>
        <input type="text" id="nome" name="nome" required>
        <select name="turma" required>
            <option value="1_lds">1 LDS</option>
            <option value="2_lds">2 LDS</option>
            <option value="3_lds">3 LDS</option>
        </select>
        <label>Nota 1</label>
        <input type="number" id="nota_1" name="nota_1" step=0.1 min=0 max=10>
        <label>Nota 2</label>
        <input type="number" id="nota_2" name="nota_2" step=0.1 min=0 max=10>
        <label>Nota 3</label>
        <input type="number" id="nota_3" name="nota_3" step=0.1 min=0 max=10>
        <label>Faltas</label>
        <input type="number" id="faltas" name="faltas" min=0 max=80>
        <button type="submit">Gerar Boletim</button>
    </form>
</body>
</html>