<?php require_once  __DIR__ . '/../includes/functions.php';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>
<body>
    <?php
    include '../includes/header.php'
    ?>
    <hr>
    <main>
        <h1>Insira suas informações de Login</h1>
        <form action="" method="post">
            <label for="nome">Email:</label>
            <input type="text" name="email" id="email"><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
       <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = consulta_user($conexao, $_POST['email']);
            if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
                session_start();
                $_SESSION['id'] = $usuario['id'];
                header("Location: /cadernovivo/index.php");
                exit();
            } else{
                echo "Usuario ou senha invalidos.";
            }
        }
        ?>

    </main>
        <hr>
        <?php include '../includes/footer.php'?>
</body>
</html>