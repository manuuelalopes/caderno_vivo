<?php require_once  __DIR__ . '/../includes/functions.php';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>

<body>
    <?php
    include  __DIR__ . '/../includes/header.php'
    ?>
    <hr>
    <main>
        <form action="" method="post">
            <label for="nome">Email:</label>
            <input type="text" name="email" id="email"><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha"><br>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco id="endereco">
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
        cadastra_user ($conexao, $_POST['email'], $_POST['senha']);
        header ("Location: ../index.php");
        exit();
        }
        ?>
        nome telefone email endereco senha 
    </main>
        <hr>
        <?php include  __DIR__ . '/../includes/footer.php'?>
</body>
</html>