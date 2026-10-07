<?php 
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <hr>
    <main>
        <h2>Atualizar Dados do Usuário</h2>

        <!-- Formulário para digitar o ID e os novos dados -->
        <form action="" method="post"> 
            <label for="id">ID do Usuário a alterar:</label><br>
            <input type="number" name="id" id="id" required><br><br>

            <label for="email">Novo E-mail:</label><br>
            <input type="email" name="email" id="email" required><br><br>

            <label for="senha">Nova Senha:</label><br>
            <input type="password" name="senha" id="senha" required><br><br>

            <input type="submit" value="Atualizar Usuário">
        </form>

        <?php 
        // Verifica se o formulário foi enviado via POST
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Chama a sua função de atualizar
            atualizar_usuario($conexao, $id, $email, $senha);
        }
        ?>

    </main>
    <hr>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>