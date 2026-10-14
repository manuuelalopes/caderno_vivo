<?php 
require_once __DIR__ . '/../includes/functions.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - Caderno Vivo</title>
    <style>
        /* Reset e Fontes */
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

        /* Oculta as linhas <hr> secas para dar lugar a um layout limpo */
        hr {
            display: none;
        }

        /* Container Principal centralizado */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        /* Cartão do Formulário */
        .login-card {
            background-color: #ffffff;
            border: 2px solid #f6d8e5;
            border-radius: 16px;
            padding: 35px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 20px rgba(178, 88, 119, 0.08);
        }

        main h1 {
            color: #b25877;
            font-size: 1.4rem;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
        }

        /* Grupos de Inputs */
        .form-group {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #7a5462;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #f0c3d4;
            border-radius: 8px;
            font-size: 0.95rem;
            outline: none;
            background-color: #fff0f5;
            color: #5a4b51;
            transition: all 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #b25877;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(178, 88, 119, 0.15);
        }

        /* Botões */
        .button-group {
            display: flex;
            gap: 12px;
            margin-top: 10px;
        }

        input[type="submit"],
        input[type="reset"] {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        input[type="submit"] {
            background-color: #b25877;
            color: #ffffff;
        }

        input[type="submit"]:hover {
            background-color: #96435f;
            transform: translateY(-1px);
        }

        input[type="reset"] {
            background-color: #fff0f5;
            color: #b25877;
            border: 1px solid #f0c3d4;
        }

        input[type="reset"]:hover {
            background-color: #fce4ec;
        }

        /* Mensagens de Erro */
        .alert-error {
            margin-top: 18px;
            background-color: #fde8e8;
            color: #c81e1e;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #f8b4b4;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: #b25877;
            font-weight: 600;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <div class="login-card">
            <h1>Insira suas informações de Login</h1>

            <form action="" method="post">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" required placeholder="seu@email.com">
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required placeholder="••••••••">
                </div>

                <div class="button-group">
                    <input type="submit" value="Entrar">
                    <input type="reset" value="Limpar">
                </div>

                <div class="signup-link">
                    <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $usuario = consulta_user($conexao, $_POST['email']);
                
                if ($usuario && $usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    
                    $_SESSION['id']       = $usuario['id'];
                    $_SESSION['nome']     = $usuario['nome'];
                    $_SESSION['is_admin'] = $usuario['is_admin']; // true ou false no PostgreSQL

                    header("Location: /cadernovivo/index.php");
                    exit();
                } else {
                    echo '<div class="alert-error">Usuário ou senha inválidos.</div>';
                }
            }
            ?>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>