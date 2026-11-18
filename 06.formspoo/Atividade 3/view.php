<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO com php</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label>Nome do funcionario</label>
        <input type="text" id="nome" name="nome" required>
        <select name="cargo" required>
            <option value="auxiliae">Auxiliar</option>
            <option value="tecnico">Técnico</option>
            <option value="analista">Analista</option>
        </select>
        <label>Horas trabalhadas</label>
        <input type="number" id="horas_trabalhadas" name="horas_trabalhadas">
        <label>Utiliza vale transporte?</label>
        <input type="radio" id="sim" name="vale_transporte" value="sim">
        <label for="html">Sim</label><br>
        <input type="radio" id="nao" name="vale_transporte" value="nao">
        <label for="css">Não</label><br>
        <button type="submit">Gerar Holerite</button>
    </form>
</body>
</html>