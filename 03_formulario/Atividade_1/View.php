<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo de formulário</title>
    </head>
    <body>
        
        <form action="Processa.php" method="POST"> 
            <label for="">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="">E-mail:</label>
            <input type="email" name="email">
            <br>
            <label for="">Senha:</label>
            <input type="password" name="senha">
            <br>
            <button type="subtmit">Enviar</button>
        </form>

    </body>
</html>