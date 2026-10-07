<?php 
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>

<body>
    <?php
    include __DIR__ . '/../includes/header.php' //chama header
    ?>
    <hr>
    <main>
        <!-- forms para informar dados do produto -->
        <h2>Insira os dados do produto</h2>
        <form action="" method="post"> 
            <label for="nome_produto">Nome do produto:</label>
            <input type="text" name="nome_produto" id="nome_produto"><br>
            <label for="preco">Preço;</label>
            <input type="text" name="preco" id="preco"><br>
            <label for="data_validade">Data de Validade:</label>
            <input type="date" name="data_validade" id="data_validade"><br>
            <label for="descricao">Descrição:</label> 
            <input type="text" name="descricao" id="descricao"> <br>
            <label for="quantidade_estoq">Quantidade no Estoque:</label>
            <input type="number" name="quantidade_estoq" id="quantidade_estoq"><br>
            <label for="imagem_url">Imagem URL:</label>
            <input type="text" name="imagem_url" id="imagem_url"><br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
        <?php //faz a conexao e cadastra os dados do produto
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
        cadastrar_produto($conexao, $_POST['nome_produto'], $_POST['preco'], $_POST['data_validade'], $_POST['descricao'], $_POST['quantidade_estoq'], $_POST['imagem_url']);
        }
        ?>

    </main>
        <hr>
        <?php include __DIR__ . '/../includes/footer.php'?>
</body>
</html>