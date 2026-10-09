<?php require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartela de produtos</title>
</head>
<body>
   <?php include __DIR__ . '/../includes/header.php';?> 
    <main>
        <?php 
        cartela_produtos($conexao);
        ?>
    </main>
    <?php  include __DIR__ . '/../includes/footer.php';?>
</body>

</html>