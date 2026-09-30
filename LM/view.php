<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição de evento</title>
</head>
<body>
    <h2 style="color:darkred; font-family:Comic Sans MS, cursive;">Inscrição em Evento</h2>
    <form action="logica.php" method="POST" style="background-color:#f3e5f5; padding:15 px; border-radius:8px;width:350px;">
        <label for="">Nome completo</label>
        <input type="text" name="nome" style="width:100%; margin-bottom:10px; color:purple; font-family: Arial;">
        <br>
        <label for="">Tipo de ingresso</label>
        <select name="tipo_ingresso" style="width:100%; margin-bottom:10px; color:purple; font-family: Arial;">
            <option value="estudante">Estudante</option>
            <option value="profissional">profissional</option>
            <option value="vip">vip</option>
        </select>
        <br>
        <label for="">Data do evento</label>
        <input type="date" name="data_evento" style="color:purple; font-family: Arial;">
        <br>
        <label for="">Hora de chegada</label>
        <input type="hour" name="hora_chegada" style="color:purple; font-family: Arial;">
        <br>
        <button type="submit" style="background-color:purple; color:white; padding: 5px 10px;">Inscrever-se</button>
    </form>
</body>
</html>