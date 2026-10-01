<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo da compra - CinePop!</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family: Arial, Helvetica, sans-serif;

            background: linear-gradient(
                135deg,
                #120707,
                #2b0b0b,
                #120707
            );

            color: white;

            min-height: 100vh;

            padding: 40px 15px;

        }


        /* Card principal */

        .container {

            width: 100%;

            max-width: 850px;

            margin: auto;

            background: #1c1c1c;

            padding: 40px;

            border-radius: 18px;

            border: 1px solid #3a3a3a;

            box-shadow:
                0 10px 35px rgba(0, 0, 0, 0.7);

        }


        /* Título */

        h1 {

            text-align: center;

            font-size: 32px;

            margin-bottom: 10px;

        }


        .subtitulo {

            text-align: center;

            color: #aaa;

            margin-bottom: 35px;

        }


        /* Tabela */

        .tabela-container {

            overflow-x: auto;

            margin-bottom: 30px;

        }


        table {

            width: 100%;

            border-collapse: collapse;

            background: #292929;

            border-radius: 10px;

            overflow: hidden;

        }


        th {

            background: #e50914;

            color: white;

            padding: 15px 10px;

            font-size: 14px;

        }


        td {

            padding: 15px 10px;

            text-align: center;

            border-bottom: 1px solid #444;

            color: #ddd;

        }


        tr:last-child td {

            border-bottom: none;

        }


        tr:hover td {

            background: #351414;

        }


        /* Pergunta */

        .pergunta {

            text-align: center;

            margin: 30px 0;

        }


        .pergunta h2 {

            font-size: 23px;

            margin-bottom: 8px;

        }


        .pergunta p {

            color: #aaa;

        }


        /* Formulário */

        .formulario {

            background: #292929;

            padding: 25px;

            border-radius: 12px;

            border: 1px solid #444;

        }


        .campo {

            margin-bottom: 22px;

        }


        .campo > label {

            display: block;

            margin-bottom: 10px;

            font-weight: bold;

            color: white;

        }


        /* Cartões */

        .cartoes {

            display: flex;

            gap: 10px;

            flex-wrap: wrap;

        }


        .cartao {

            flex: 1;

            min-width: 150px;

        }


        .cartao input {

            display: none;

        }


        .cartao label {

            display: block;

            padding: 13px;

            text-align: center;

            background: #1c1c1c;

            border: 1px solid #555;

            border-radius: 8px;

            cursor: pointer;

            transition: 0.3s;

        }


        .cartao label:hover {

            border-color: #e50914;

            background: #351414;

        }


        .cartao input:checked + label {

            background: #e50914;

            border-color: #e50914;

            box-shadow:
                0 0 12px rgba(229, 9, 20, 0.35);

        }


        /* Inputs */

        input[type="number"],
        input[type="password"] {

            width: 100%;

            padding: 13px 15px;

            background: #1c1c1c;

            color: white;

            border: 1px solid #555;

            border-radius: 8px;

            font-size: 16px;

            outline: none;

            transition: 0.3s;

        }


        input[type="number"]:focus,
        input[type="password"]:focus {

            border-color: #e50914;

            box-shadow:
                0 0 8px rgba(229, 9, 20, 0.3);

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

            margin-top: 5px;

            transition: 0.3s;

            box-shadow:
                0 5px 20px rgba(229, 9, 20, 0.35);

        }


        button:hover {

            background: #ff2633;

            transform: scale(1.02);

        }


        /* Voltar */

        .voltar {

            display: block;

            text-align: center;

            margin-top: 25px;

            color: #aaa;

            text-decoration: none;

        }


        .voltar:hover {

            color: #e50914;

        }


        /* Celular */

        @media (max-width: 600px) {

            .container {

                padding: 25px 18px;

            }


            h1 {

                font-size: 26px;

            }


            .formulario {

                padding: 20px;

            }


            .cartao {

                min-width: 100%;

            }

        }

    </style>

</head>


<body>


    <div class="container">


        <h1>
            🎟️ Resumo da compra
        </h1>


        <p class="subtitulo">
            Confira os dados do seu pedido antes de continuar.
        </p>


        <!-- Tabela -->

        <div class="tabela-container">

            <table>

                <tr>

                    <th>Nome</th>

                    <th>Quantidade</th>

                    <th>Tipo</th>

                    <th>Filme</th>

                    <th>Preço individual</th>

                    <th>Preço total</th>

                </tr>


                <tr>

                    <?php foreach ($informacoes as $informacao): ?>

                        <td>
                            <?= $informacao['nome'] ?>
                        </td>

                    <?php endforeach ?>

                </tr>

            </table>

        </div>


        <!-- Pergunta -->

        <div class="pergunta">

            <h2>
                Essas informações estão corretas?
            </h2>

            <p>
                Se estiver tudo certo, preencha os dados abaixo para confirmar.
            </p>

        </div>


        <!-- Formulário -->

        <form
            class="formulario"
            action="processa2.php"
            method="POST"
        >


            <!-- Cartão -->

            <div class="campo">

                <label>
                    💳 Tipo de cartão
                </label>


                <div class="cartoes">


                    <div class="cartao">

                        <input
                            type="radio"
                            id="mastercard"
                            name="cartao"
                            value="mastercard"
                            required
                        >

                        <label for="mastercard">
                            💳 Mastercard
                        </label>

                    </div>


                    <div class="cartao">

                        <input
                            type="radio"
                            id="banco_brasil"
                            name="cartao"
                            value="banco_brasil"
                        >

                        <label for="banco_brasil">
                            🏦 Banco do Brasil
                        </label>

                    </div>


                    <div class="cartao">

                        <input
                            type="radio"
                            id="santander"
                            name="cartao"
                            value="santander"
                        >

                        <label for="santander">
                            🏦 Santander
                        </label>

                    </div>


                </div>

            </div>


            <!-- Número -->

            <div class="campo">

                <label for="numero_cartao">
                    💳 Número do cartão
                </label>

                <input
                    type="number"
                    id="numero_cartao"
                    name="numero_cartao"
                    placeholder="Digite o número do cartão"
                    required
                >

            </div>


            <!-- Senha -->

            <div class="campo">

                <label for="senha">
                    🔒 Senha do cartão
                </label>

                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >

            </div>


            <!-- Confirmar -->

            <button type="submit">
                🎬 Confirmar pagamento
            </button>


        </form>


        <!-- Voltar -->

        <a
            class="voltar"
            href="view.php"
        >
            ← Voltar para a página anterior
        </a>


    </div>


</body>

</html>
