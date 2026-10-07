<?php 
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <?php
    include __DIR__ . '/../includes/header.php'; // chama header
    ?>
    <hr>
    <main>
        <!-- Formulário para informar dados do usuário -->
        <h2>Insira os dados do usuário</h2>
        <form action="" method="post"> 
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>

            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>

        <?php 
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Chama a função de cadastrar usuário que está no seu functions.php
            cadastra_user($conexao, $email, $senha);
        }
        ?>

    </main>
    <hr>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>