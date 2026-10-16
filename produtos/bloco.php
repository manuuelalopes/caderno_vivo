<?php 
require_once __DIR__ . '/../includes/functions.php';

// 1. Pega o ID enviado na URL (ex: produto.php?id=1)
$id_produto = $_GET['id'] ?? null;

$produto = null;
if ($id_produto) {
    // 2. Chama a sua função para buscar no banco via PDO
    $produto = consultar($conexao, $id_produto);
}

// Se o produto não for encontrado no banco de dados
if (!$produto) {
    echo "<h2 style='text-align:center; margin-top:50px; color:#b25877;'>Produto não encontrado!</h2>";
    echo "<p style='text-align:center;'><a href='/cadernovivo/index.php'>Voltar para a página inicial</a></p>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($produto['nome_produto']) ?> - Caderno Vivo</title>
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

        hr {
            display: none;
        }

        main {
            flex: 1;
            max-width: 1100px;
            width: 100%;
            margin: 40px auto;
            padding: 0 20px;
        }

        .breadcrumb {
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: #b25877;
            text-decoration: none;
            font-weight: 500;
        }

        .product-card {
            background-color: #ffffff;
            border: 2px solid #f6d8e5;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 24px rgba(178, 88, 119, 0.08);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .product-image-box {
            background-color: #fff0f5;
            border: 1.5px solid #f0c3d4;
            border-radius: 16px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image-box img {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            border-radius: 10px;
        }

        .product-details {
            display: flex;
            flex-direction: column;
        }

        .stock-tag {
            font-size: 0.85rem;
            color: #b25877;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .product-title {
            font-size: 1.8rem;
            color: #5a4b51;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .price-box {
            background-color: #fff0f5;
            border-radius: 12px;
            padding: 16px 20px;
            margin-bottom: 20px;
        }

        .current-price {
            font-size: 2.1rem;
            color: #b25877;
            font-weight: 700;
        }

        .product-description {
            margin-bottom: 25px;
        }

        .product-description h3 {
            font-size: 1rem;
            color: #7a5462;
            margin-bottom: 8px;
        }

        .product-description p {
            font-size: 0.95rem;
            color: #6d5860;
            line-height: 1.6;
        }

        .action-box {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-top: auto;
        }

        .quantity-control input {
            width: 60px;
            height: 48px;
            border: 1.5px solid #f0c3d4;
            border-radius: 10px;
            background-color: #fff0f5;
            text-align: center;
            font-size: 1rem;
            font-weight: 600;
            color: #5a4b51;
            outline: none;
        }

        .btn-buy {
            flex: 1;
            background-color: #b25877;
            color: #ffffff;
            border: none;
            padding: 14px 24px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-buy:hover {
            background-color: #96435f;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .product-card {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <div class="breadcrumb">
            <a href="/cadernovivo/index.php">← Voltar para a Loja</a>
        </div>

        <article class="product-card">
            <!-- Imagem vinda da coluna 'imagem_url' do banco -->
            <div class="product-image-box">
                <img src="<?= htmlspecialchars($produto['imagem_url']) ?>" alt="<?= htmlspecialchars($produto['nome_produto']) ?>">
            </div>

            <!-- Informações vindas do Banco -->
            <div class="product-details">
                <span class="stock-tag">Em Estoque: <?= $produto['quantidade_estoq'] ?> unidades</span>
                <h1 class="product-title"><?= htmlspecialchars($produto['nome_produto']) ?></h1>

                <div class="price-box">
                    <span class="current-price">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></span>
                </div>

                <div class="product-description">
                    <h3>Descrição</h3>
                    <p><?= nl2br(htmlspecialchars($produto['descricao'])) ?></p>
                </div>

                <form action="carrinho.php" method="post" class="action-box">
                    <input type="hidden" name="produto_id" value="<?= $id_produto ?>">
                    
                    <div class="quantity-control">
                        <input type="number" name="quantidade" value="1" min="1" max="<?= $produto['quantidade_estoq'] ?>">
                    </div>

                    <button type="submit" class="btn-buy">Adicionar ao Carrinho 🛍️</button>
                </form>
            </div>
        </article>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>