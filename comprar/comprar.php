<?php
require_once __DIR__ . '/../includes/functions.php';

// Pega o ID do produto vindo do botão "Comprar" ou "Adicionar ao Carrinho"
$id_produto = $_REQUEST['produto_id'] ?? $_REQUEST['id'] ?? null;
$quantidade = $_REQUEST['quantidade'] ?? 1;

$produto = null;
if ($id_produto) {
    $produto = consultar($conexao, $id_produto);
}

if (!$produto) {
    header("Location: /cadernovivo/index.php");
    exit();
}

$valor_total = $produto['preco'] * $quantidade;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Caderno Vivo</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fffafc; color: #5a4b51; min-height: 100vh; display: flex; flex-direction: column; }
        hr { display: none; }

        main { flex: 1; max-width: 800px; width: 100%; margin: 40px auto; padding: 0 20px; }

        .checkout-card {
            background: #ffffff;
            border: 2px solid #f6d8e5;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(178, 88, 119, 0.08);
        }

        h1 { color: #b25877; font-size: 1.5rem; text-align: center; margin-bottom: 25px; }

        /* Resumo do Produto */
        .product-summary {
            display: flex;
            align-items: center;
            gap: 20px;
            background-color: #fff0f5;
            padding: 15px 20px;
            border-radius: 12px;
            border: 1px solid #f0c3d4;
            margin-bottom: 25px;
        }

        .product-summary img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            border-radius: 8px;
            background: #fff;
        }

        .product-info h3 { font-size: 1.1rem; color: #5a4b51; margin-bottom: 5px; }
        .product-info p { font-size: 0.9rem; color: #7a5462; }
        .total-price { margin-left: auto; font-size: 1.3rem; font-weight: 700; color: #b25877; }

        /* Card Opções de Pagamento */
        .payment-options { margin-top: 20px; }
        .payment-options h2 { font-size: 1.1rem; color: #7a5462; margin-bottom: 12px; }

        .payment-card {
            border: 2px solid #b25877;
            background-color: #fff0f5;
            border-radius: 12px;
            padding: 16px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
        }

        .payment-card input[type="radio"] { accent-color: #b25877; transform: scale(1.2); }
        .payment-card label { font-weight: 600; color: #5a4b51; cursor: pointer; flex: 1; }
        .pix-badge { background: #00bdae; color: #fff; font-size: 0.75rem; padding: 4px 8px; border-radius: 6px; font-weight: bold; }

        .btn-confirm {
            width: 100%;
            background-color: #b25877;
            color: #ffffff;
            border: none;
            padding: 14px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 25px;
            transition: background 0.2s;
        }

        .btn-confirm:hover { background-color: #96435f; }
    </style>
</head>

<body>
    <?php include '/../includes/header.php'; ?>

    <main>
        <div class="checkout-card">
            <h1>Confirmação do Pedido </h1>

            <!-- Resumo do Produto Selecionado -->
            <div class="product-summary">
                <img src="<?= htmlspecialchars($produto['imagem_url']) ?>" alt="<?= htmlspecialchars($produto['nome_produto']) ?>">
                <div class="product-info">
                    <h3><?= htmlspecialchars($produto['nome_produto']) ?></h3>
                    <p>Quantidade: <?= $quantidade ?></p>
                </div>
                <div class="total-price">
                    R$ <?= number_format($valor_total, 2, ',', '.') ?>
                </div>
            </div>

            <!-- Formulário para Gerar o PIX -->
            <form action="pagamento.php" method="post">
                <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">
                <input type="hidden" name="valor_total" value="<?= $valor_total ?>">

                <div class="payment-options">
                    <h2>Forma de Pagamento</h2>
                    <div class="payment-card">
                        <input type="radio" name="metodo_pagamento" id="pix" value="pix" checked>
                        <label for="pix">PIX (Aprovação Instantânea)</label>
                        <span class="pix-badge">PIX</span>
                    </div>
                </div>

                <button type="submit" class="btn-confirm">Gerar Código PIX 📱</button>
            </form>
        </div>
    </main>

    <?php include '/../includes/footer.php'; ?>
</body>

</html>