<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>
    <h1>Boletim escolar, <?= $this->getnome()?> da turma <?= $this->getturma()?> </h1>
    <table>
        <tr>
            <td><?= $this->getnota1()?></td>
            <td><?= $this->getnota2()?></td>
            <td><?= $this->getnota3()?></td>
            <td><?= $this->calcularmedia()?></td>
        </tr>
    </table>
    <p><b><?= $this->faltas()?><p><b>
        <p><b><?php if ($this->calcularfrequencia>=75):?>
        Aprovado</b></p>
    <p><b><?php elseif($this->calcularfrequencia<=50):?>
        Recuperação</b></p>
        <p><b><?php else:?>
        Reprovado</b></p>
            <?php endif; ?>
    <p><b><?php if ($this->calcularmedia>=7):?>
        Parabéns, continue assim!</b></p>
    <p><b><?php else:?>
        Atenção: procure o professor para saber os próximos passos.</b></p>
            <?php endif; ?>
</body>
</html>