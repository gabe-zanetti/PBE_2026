<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Weitech</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
            <nav>
                <ul>
                    <li class="direita"><a class="ativo" href="#">   Encomendas  </a></li>
                    <li class="direita"><a class="ativo" href="#">Historico</a></li>

                </ul>
            </nav>
        </header>
    <div class="principal">
    <h1>Orçamento WEITECH 🚛</h1>
    <p>Olá <b><?=$cliente ?></b>  aqui serão exibidos seus dados</p>
    <div class="visualizacao">
        <table border="1">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Peso por unidade (kg)</th>
                    <th>Peso total (kg)</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                        <td><?= $produto['peso'] ?></td>
                        <td>
                            <?= $produto['quantidade'] * $produto['peso'] ?>
                        </td>
                        <?php endforeach; ?>
                        
                    </tr>
                
            </tbody>
        </table>
        <p><b>Peso total da carga:</b><?=$total ?> </p>
        <p><b><?php if ($total>=20000):?>
            Precisara de uma carreta para carregar</b></p>
            <?php endif; ?>
        <p><b>Caminhão:</b> <?=$caminhao?> </p>
        <p><b>Capacidade:</b> <?=$peso_maximo_caminhao?> </p>
        <p><b>Número de viagens:</b> <?=ceil($viagens)?> </p>
        <p><b>Valor do frete:</b><?= $preco_total ?> </p>
    </div>
</div>
    </body>
</body>
</html>



