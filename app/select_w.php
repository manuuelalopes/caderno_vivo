<?php require_once __DIR__ . '/../includes/functions.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produto</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php';?>
    <h1>Consultar Produto</h1>
    <main>
            <form action="" method="post">
                <label for="id">ID do produto: </label>
                <input type="number" name="id" id="id" placeholder="Insira o ID para consultar" required><br>
                <input type="submit" value="Consultar">
            </form>
             <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        consultar ($conexao, $_POST['id']); 
        }
        ?>
    </main>
    <?php include __DIR__ . '/../includes/footer.php';?>
</body>
</html>

