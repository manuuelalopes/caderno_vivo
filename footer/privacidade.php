<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade - CadernoVivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f5;
            margin: 20px;
        }

        .container-politica {
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            color: #5a3e36;
        }

        .container-politica h1 {
            color: #5a3e36;
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .container-politica .subtitulo {
            text-align: center;
            color: #d17088;
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .conteudo-texto {
            line-height: 1.8;
            font-size: 1rem;
        }

        .secao-topico {
            background-color: #fff0f5;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #f8d2dc;
            margin-bottom: 20px;
        }

        .secao-topico h2 {
            color: #d17088;
            font-size: 1.2rem;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .secao-topico p {
            margin: 0 0 10px 0;
        }

        .secao-topico p:last-child {
            margin-bottom: 0;
        }

        .secao-topico ul {
            margin: 10px 0 0 20px;
            padding: 0;
        }

        .secao-topico li {
            margin-bottom: 5px;
        }

        /* Botão de voltar */
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

    <main class="container-politica">
        <h1>Política de Privacidade</h1>
        <p class="subtitulo">Sua privacidade e a segurança dos seus dados são nossa prioridade</p>

        <div class="conteudo-texto">
            <div class="secao-topico">
                <h2>1. Coleta de Informações</h2>
                <p>Coletamos informações pessoais essenciais para fornecer a melhor experiência de compra no <strong>CadernoVivo</strong>, tais como:</p>
                <ul>
                    <li>Nome completo e e-mail para cadastro e autenticação;</li>
                    <li>Endereço e telefone para entrega de pedidos;</li>
                    <li>Histórico de navegação e compras para personalização de ofertas.</li>
                </ul>
            </div>

            <div class="secao-topico">
                <h2>2. Uso dos Dados</h2>
                <p>Os seus dados são utilizados estritamente para:</p>
                <ul>
                    <li>Processar e entregar os seus pedidos;</li>
                    <li>Enviar atualizações sobre o status de suas compras;</li>
                    <li>Prestar suporte ao cliente quando solicitado;</li>
                    <li>Enviar novidades e promoções (apenas com o seu consentimento).</li>
                </ul>
            </div>

            <div class="secao-topico">
                <h2>3. Proteção e Segurança</h2>
                <p>Adotamos medidas de segurança para proteger suas informações pessoais contra acessos não autorizados, alterações ou divulgações. Não vendemos ou compartilhamos os seus dados com terceiros para fins de marketing.</p>
            </div>

            <div class="secao-topico">
                <h2>4. Seus Direitos</h2>
                <p>Você pode a qualquer momento solicitar a atualização, correção ou exclusão dos seus dados cadastrais em nossa plataforma através da nossa página de suporte ou e-mail de contato.</p>
            </div>
        </div>

        <!-- Botão para voltar ao index.php na raiz -->
        <div class="container-btn-voltar">
            <a href="../index.php" class="btn-voltar">← Voltar para o Início</a>
        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>