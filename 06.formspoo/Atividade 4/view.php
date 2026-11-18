<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula PowerFit</title>
</head>
<body>

    <h1>Formulário de Matrícula</h1>

    <form action="logica.php" method="POST">

        <h3>Dados do Aluno</h3>

        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Peso (kg):</label>
        <input type="number" name="peso" step="0.1" required>
        <br><br>

        <label>Altura (m):</label>
        <input type="number" name="altura" step="0.01" required>
        <br>
        <hr>
        <h3>Dados da Matrícula</h3>

        <label>Plano:</label>
        <select name="plano" required>
            <option value="">Selecione</option>
            <option value="Básico">Básico - R$ 80,00</option>
            <option value="Plus">Plus - R$ 120,00</option>
            <option value="Premium">Premium - R$ 180,00</option>
        </select>
        <br><br>

        <label>Quantidade de meses:</label>
        <input type="number" name="meses" min="1" max="12" required>
        <br><br>

        <h3>Modalidades Extras</h3>

        <input type="checkbox" name="modalidades[]" value="Natação">
        Natação - R$ 60,00
        <br>

        <input type="checkbox" name="modalidades[]" value="Funcional">
        Funcional - R$ 40,00
        <br>

        <input type="checkbox" name="modalidades[]" value="Lutas">
        Lutas - R$ 50,00
        <br><br>

        <button type="submit">Gerar Matrícula</button>

    </form>

</body>
</html>