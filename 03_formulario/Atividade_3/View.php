<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo de formulário</title>
    </head>
    <body>
        
        <form action="Processa.php" method="POST">
            <input type="number" name="primeiro numero">
            <br>
            <input type="number" name="segundo numero">
            <br>
            <select name="divisao" required>
                <option value="">Selecione o calculo</option>
                <option value="+">Mais</option>
                <option value="-">Menos</option>
                <option value="*">Mutiplicação</option>
                <option value="/">Divisão</option>

            </select>
            <button type="subtmit">Enviar</button>
        </form>

    </body>
</html>