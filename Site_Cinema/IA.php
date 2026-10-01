<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CinePop!</title>

    <style>
        /* Configurações gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #120707, #2b0b0b, #120707);
            color: white;
            min-height: 100vh;
        }

        /* Cabeçalho */
        header {
            background: rgba(0, 0, 0, 0.75);
            padding: 25px 20px;
            text-align: center;
            border-bottom: 2px solid #e50914;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        header img {
            width: 280px;
            max-width: 80%;
            transition: transform 0.3s;
        }

        header img:hover {
            transform: scale(1.05);
        }

        /* Conteúdo principal */
        main {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .subtitulo {
            font-size: 20px;
            color: #cccccc;
            margin-bottom: 45px;
        }

        .titulo-secao {
            font-size: 30px;
            margin-bottom: 30px;
            color: #e50914;
        }

        /* Área dos filmes */
        .filmes {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* Card individual */
        .filme {
    width: 220px;
    background: #1c1c1c;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
    transition: transform 0.3s, box-shadow 0.3s;
}

.filme img {
    width: 100%;
    height: 310px;
    object-fit: cover;
    display: block;
}


        .filme:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 35px rgba(229, 9, 20, 0.35);
        }


        .filme-info {
            padding: 20px;
        }

        .filme h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .preco {
            color: #ff4444;
            font-size: 18px;
            font-weight: bold;
        }

        /* Botão de compra */
        .comprar {
            display: inline-block;
            margin-top: 40px;
            padding: 16px 35px;
            background: #e50914;
            color: white;
            text-decoration: none;
            font-size: 19px;
            font-weight: bold;
            border-radius: 30px;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 5px 20px rgba(229, 9, 20, 0.4);
        }

        .comprar:hover {
            background: #ff2633;
            transform: scale(1.05);
        }

        /* Rodapé */
        footer {
            margin-top: 60px;
            padding: 25px;
            text-align: center;
            background: #080808;
            color: #888;
            border-top: 1px solid #333;
        }

        /* Ajustes para celular */
        @media (max-width: 600px) {
    h1 {
        font-size: 30px;
    }

    .subtitulo {
        font-size: 17px;
    }

    .filme {
        width: 80%;
        max-width: 240px;
    }

    .filme img {
        height: 330px;
    }
}


    </style>
</head>

<body>

    <header>
        <img src="Cine.png" alt="Logo CinePop">
    </header>

    <main>

        <h1>Bem-vindos ao CinePop!</h1>

        <p class="subtitulo">
            🎬 Um dos melhores cinemas da região!
        </p>

        <h2 class="titulo-secao">
            🍿 Opções da semana
        </h2>

        <section class="filmes">

            <!-- Coração Selvagem -->
            <div class="filme">
                <img src="coracao.png" alt="Coração Selvagem">

                <div class="filme-info">
                    <h3>Coração Selvagem</h3>

                    <p class="preco">
                        Ingresso: R$ 20,00
                    </p>
                </div>
            </div>

            <!-- Vingadores -->
            <div class="filme">
                <img src="vingadores.png" alt="Vingadores">

                <div class="filme-info">
                    <h3>Vingadores</h3>

                    <p class="preco">
                        Ingresso: R$ 30,00
                    </p>
                </div>
            </div>

            <!-- Homem-Aranha -->
            <div class="filme">
                <img src="aranha.jpg" alt="Homem-Aranha">

                <div class="filme-info">
                    <h3>Homem-Aranha</h3>

                    <p class="preco">
                        Ingresso: R$ 25,00
                    </p>
                </div>
            </div>

        </section>

        <a class="comprar" href="view.php">
            🎟️ Comprar meu ingresso
        </a>

    </main>

    <footer>
        <p>© 2026 CinePop! — Todos os direitos reservados.</p>
    </footer>

</body>
</html>