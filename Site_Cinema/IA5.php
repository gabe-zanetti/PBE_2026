<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pagamento efetuado - CinePop!</title>


    <style>

        /* Configurações gerais */

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

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 20px;

        }


        /* Card principal */

        .container {

            width: 100%;

            max-width: 600px;

            background: #1c1c1c;

            padding: 45px 35px;

            border-radius: 20px;

            text-align: center;

            border: 1px solid #3a3a3a;

            box-shadow:
                0 10px 35px rgba(0, 0, 0, 0.7);

        }


        /* Ícone de sucesso */

        .icone {

            width: 85px;

            height: 85px;

            margin: 0 auto 25px;

            display: flex;

            justify-content: center;

            align-items: center;

            background: #e50914;

            border-radius: 50%;

            font-size: 45px;

            box-shadow:
                0 0 30px rgba(229, 9, 20, 0.45);

        }


        /* Título */

        h1 {

            font-size: 32px;

            margin-bottom: 15px;

            color: white;

        }


        /* Mensagem */

        .mensagem {

            color: #ccc;

            font-size: 17px;

            line-height: 1.6;

            margin-bottom: 25px;

        }


        /* Caixa de ajuda */

        .ajuda {

            background: #292929;

            border: 1px solid #444;

            border-radius: 12px;

            padding: 20px;

            margin-bottom: 30px;

        }


        .ajuda p {

            color: #aaa;

            font-size: 14px;

            margin-bottom: 8px;

        }


        .email {

            color: #ff4444;

            font-weight: bold;

            word-break: break-word;

        }


        /* Botão */

        .inicio {

            display: inline-block;

            padding: 15px 30px;

            background: #e50914;

            color: white;

            text-decoration: none;

            font-size: 18px;

            font-weight: bold;

            border-radius: 30px;

            transition: 0.3s;

            box-shadow:
                0 5px 20px rgba(229, 9, 20, 0.35);

        }


        .inicio:hover {

            background: #ff2633;

            transform: scale(1.05);

        }


        /* Rodapé */

        .rodape {

            margin-top: 30px;

            color: #666;

            font-size: 13px;

        }


        /* Celular */

        @media (max-width: 500px) {

            .container {

                padding: 35px 20px;

            }


            h1 {

                font-size: 27px;

            }


            .mensagem {

                font-size: 16px;

            }


            .inicio {

                width: 100%;

            }

        }

    </style>

</head>


<body>


    <div class="container">


        <!-- Ícone -->

        <div class="icone">
            ✓
        </div>


        <!-- Título -->

        <h1>
            Pagamento concluído!
        </h1>


        <!-- Mensagem -->

        <p class="mensagem">

            Seu pagamento foi realizado com sucesso! 🎬

            <br>

            Obrigado por escolher o CinePop.

        </p>


        <!-- Ajuda -->

        <div class="ajuda">

            <p>
                Caso tenha ocorrido algum erro ou você tenha alguma dúvida,
                entre em contato conosco:
            </p>

            <span class="email">
                Ajuda.cinema.cinepop@proton.me
            </span>

        </div>


        <!-- Botão -->

        <a
            class="inicio"
            href="Comeco.php"
        >
            🍿 Voltar para o CinePop
        </a>


        <!-- Rodapé -->

        <p class="rodape">
            © 2026 CinePop! — Todos os direitos reservados.
        </p>


    </div>


</body>

</html>
