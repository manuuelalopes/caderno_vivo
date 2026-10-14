<?php require_once __DIR__ . '/../includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Caderno Vivo</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fffafc;
            color: #5a4b51;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .card {
            background-color: #ffffff;
            border: 2px solid #f6d8e5;
            border-radius: 16px;
            padding: 35px 30px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 8px 20px rgba(178, 88, 119, 0.08);
        }

        h1 {
            color: #b25877;
            font-size: 1.4rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 14px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #7a5462;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #f0c3d4;
            border-radius: 8px;
            font-size: 0.9rem;
            outline: none;
            background-color: #fff0f5;
            color: #5a4b51;
        }

        input:focus {
            border-color: #b25877;
            background-color: #ffffff;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #b25877;
            color: #ffffff;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #96435f;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 0.85rem;
        }

        .login-link a {
            color: #b25877;
            font-weight: 600;
            text-decoration: none;
        }

        .alert-error {
            background-color: #fde8e8;
            color: #c81e1e;
            padding: 10px;
            border-radius: 8px;
            margin-top: 15px;
            text-align: center;
            font-size: 0.85rem;
        }

        .alert-success {
            background-color: #e8fde8;
            color: #1ec839;
            padding: 10px;
            border-radius: 8px;
            margin-top: 15px;
            text-align: center;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <div class="card">
            <h1>Crie sua Conta</h1>

            <form action="" method="post">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome" id="nome" required placeholder="Seu nome completo">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone / WhatsApp:</label>
                    <input type="tel" name="telefone" id="telefone" required placeholder="(11) 99999-9999">
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" required placeholder="Rua, número, bairro, cidade">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required placeholder="seu@email.com">
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required placeholder="Crie uma senha segura">
                </div>

                <button type="submit" class="btn-submit">Cadastrar</button>
            </form>
            <br>
                <div class="container-btn-voltar">
                <a href="../index.php" class="btn-voltar">← Voltar para o Início</a>
                </div>
        

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome     = $_POST['nome'] ??'';
                $telefone = $_POST['telefone'] ??'';
                $endereco = $_POST['endereco'] ??'';
                $email    = $_POST['email'] ??'';
                $senha    = $_POST['senha'] ??'';

                // Aqui você chama a sua função do banco de dados para cadastrar
                // Exemplo com função:
                $sucesso = cadastra_user($conexao, $nome, $telefone, $endereco, $email, $senha);

                if ($sucesso) {
                   return true;
                } else {
                    echo '<div class="alert-error">Erro ao cadastrar. Tente novamente mais tarde.</div>';
                }
            } ?>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>