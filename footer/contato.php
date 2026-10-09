<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - CadernoVivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f5;
            margin: 20px;
        }

        .container-contato {
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            color: #5a3e36;
        }

        .container-contato h1 {
            color: #5a3e36;
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .container-contato .subtitulo {
            text-align: center;
            color: #d17088;
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        /* Formatação das opções de contato rápido */
        .info-contato {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }

        .card-info {
            background-color: #fff0f5;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #f8d2dc;
        }

        .card-info h3 {
            color: #d17088;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .card-info p {
            margin: 0;
            font-size: 0.95rem;
            font-weight: bold;
        }

        /* Formulário de Mensagem */
        .form-contato {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .campo-grupo {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .campo-grupo label {
            font-weight: bold;
            font-size: 0.95rem;
        }

        .campo-grupo input,
        .campo-grupo textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #f8d2dc;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            font-size: 1rem;
            box-sizing: border-box;
            background-color: #fff0f5;
            color: #5a3e36;
            outline: none;
            transition: border-color 0.2s;
        }

        .campo-grupo input:focus,
        .campo-grupo textarea:focus {
            border-color: #d17088;
            background-color: #ffffff;
        }

        .btn-enviar {
            background-color: #d17088;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
            margin-top: 10px;
        }

        .btn-enviar:hover {
            background-color: #b5566e;
            transform: translateY(-2px);
        }

        /* Botão de Voltar */
        .container-btn-voltar {
            text-align: center;
            margin-top: 30px;
        }

        .btn-voltar {
            display: inline-block;
            background-color: #5a3e36;
            color: #ffffff;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.2s, transform 0.2s;
        }

        .btn-voltar:hover {
            background-color: #d17088;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="container-contato">
        <h1>Fale Conosco</h1>
        <p class="subtitulo">Dúvidas, sugestões ou elogios? Mande uma mensagem para nós!</p>

        <!-- Informações de Atendimento -->
        <div class="info-contato">
            <div class="card-info">
                <h3>E-mail</h3>
                <p>contato@cadernovivo.com</p>
            </div>
            <div class="card-info">
                <h3>WhatsApp</h3>
                <p>(00) 99999-9999</p>
            </div>
            <div class="card-info">
                <h3>Atendimento</h3>
                <p>Seg a Sex: 09h às 18h</p>
            </div>
        </div>

        <div class="container-btn-voltar">
            <a href="../index.php" class="btn-voltar">← Voltar para o Início</a>
        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>