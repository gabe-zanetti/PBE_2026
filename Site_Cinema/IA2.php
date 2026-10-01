<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Comprar ingresso - CinePop!</title>

    <style>
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

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px 15px;
        }

        /* Card do formulário */
        .container {
            width: 100%;
            max-width: 600px;
            background: #1c1c1c;
            padding: 40px;
            border-radius: 18px;

            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.7);
            border: 1px solid #3a3a3a;
        }

        /* Título */
        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .subtitulo {
            text-align: center;
            color: #aaa;
            margin-bottom: 35px;
        }

        /* Campos */
        .campo {
            margin-bottom: 25px;
        }

        .campo > label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 13px 15px;

            background: #292929;
            color: white;

            border: 1px solid #555;
            border-radius: 8px;

            font-size: 16px;
            outline: none;

            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #e50914;
            box-shadow: 0 0 8px rgba(229, 9, 20, 0.3);
        }

        /* Opções */
        .opcoes {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .opcao {
            flex: 1;
            min-width: 130px;
        }

        .opcao input {
            display: none;
        }

        .opcao label {
            display: block;
            padding: 13px 10px;

            background: #292929;
            border: 1px solid #555;
            border-radius: 8px;

            text-align: center;
            cursor: pointer;

            transition: 0.3s;
        }

        .opcao label:hover {
            border-color: #e50914;
            background: #351414;
        }

        .opcao input:checked + label {
            background: #e50914;
            border-color: #e50914;
            color: white;
            box-shadow: 0 0 12px rgba(229, 9, 20, 0.35);
        }

        /* Botão */
        button {
            width: 100%;
            padding: 15px;

            background: #e50914;
            color: white;

            border: none;
            border-radius: 30px;

            font-size: 18px;
            font-weight: bold;

            cursor: pointer;
            margin-top: 10px;

            transition: 0.3s;
        }

        button:hover {
            background: #ff2633;
            transform: scale(1.02);
            box-shadow: 0 5px 20px rgba(229, 9, 20, 0.4);
        }

        /* Link voltar */
        .voltar {
            display: block;
            text-align: center;

            margin-top: 20px;

            color: #aaa;
            text-decoration: none;
        }

        .voltar:hover {
            color: #e50914;
        }

        /* Celular */
        @media (max-width: 500px) {
            .container {
                padding: 25px 20px;
            }

            h1 {
                font-size: 26px;
            }

            .opcao {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>🎟️ Comprar ingresso</h1>

        <p class="subtitulo">
            Preencha os dados abaixo para realizar sua compra.
        </p>

        <form action="processa.php" method="POST">

            <!-- Nome -->
            <div class="campo">
                <label for="nome_cliente">Seu nome</label>

                <input
                    type="text"
                    id="nome_cliente"
                    name="nome_cliente"
                    placeholder="Digite seu nome"
                    required
                >
            </div>

            <!-- Tipo de ingresso -->
            <div class="campo">
                <label>Tipo de ingresso</label>

                <div class="opcoes">

                    <div class="opcao">
                        <input
                            type="radio"
                            id="inteira"
                            name="tipo"
                            value="inteira"
                            required
                        >

                        <label for="inteira">
                            🎟️ Inteira
                        </label>
                    </div>

                    <div class="opcao">
                        <input
                            type="radio"
                            id="meia"
                            name="tipo"
                            value="meia"
                        >

                        <label for="meia">
                            🎫 Meia
                        </label>
                    </div>

                </div>
            </div>

            <!-- Quantidade -->
            <div class="campo">
                <label for="quantidade">Quantidade de ingressos</label>

                <input
                    type="number"
                    id="quantidade"
                    name="quantidade"
                    min="1"
                    placeholder="Ex: 2"
                    required
                >
            </div>

            <!-- Filme -->
            <div class="campo">
                <label>Escolha o filme</label>

                <div class="opcoes">

                    <div class="opcao">
                        <input
                            type="radio"
                            id="coracao"
                            name="filme"
                            value="coracao_selvagem"
                            required
                        >

                        <label for="coracao">
                            ❤️ Coração Selvagem
                        </label>
                    </div>

                    <div class="opcao">
                        <input
                            type="radio"
                            id="aranha"
                            name="filme"
                            value="homem_aranha"
                        >

                        <label for="aranha">
                            🕷️ Homem-Aranha
                        </label>
                    </div>

                    <div class="opcao">
                        <input
                            type="radio"
                            id="vingadores"
                            name="filme"
                            value="vingadores"
                        >

                        <label for="vingadores">
                            🦸 Vingadores
                        </label>
                    </div>

                </div>
            </div>

            <!-- Enviar -->
            <button type="submit">
                🎬 Confirmar compra
            </button>

        </form>

        <a class="voltar" href="index.html">
            ← Voltar para o CinePop
        </a>

    </div>

</body>

</html>