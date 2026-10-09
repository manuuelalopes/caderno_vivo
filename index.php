<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadernoVivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f5; 
            margin: 20px;
        }
        
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo {
            width: 120px; 
            height: auto;
            border-radius: 12px; 
        }
        
        nav a {
            text-decoration: none;
            color: #5a3e36;
            font-weight: bold;
        }

        nav a:hover {
            color: #d17088;
        }

        /* --- ESTILOS DO BANNER PRINCIPAL --- */
        .banner-principal {
            max-width: 1200px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .banner-principal img {
            width: 100%;
            height: auto;
            max-height: 350px;
            object-fit: cover;
            display: block;
        }

        /* --- ESTILOS DOS PRODUTOS MAIS VENDIDOS --- */
        .secao-produtos {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 10px;
        }

        .secao-produtos h2 {
            color: #5a3e36;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.8rem;
        }

        /* Grid responsiva para os cards */
        .grid-produtos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        /* Design de cada Card de Produto */
        .card-produto {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-produto:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(209, 112, 136, 0.2);
        }

        .card-produto img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .card-produto h3 {
            color: #5a3e36;
            font-size: 1.1rem;
            margin: 8px 0;
        }

        .card-produto .preco {
            color: #d17088;
            font-size: 1.2rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .card-produto .btn-comprar {
            display: inline-block;
            background-color: #5a3e36;
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .card-produto .btn-comprar:hover {
            background-color: #d17088;
        }

        /* --- BOTÃO VER TODOS OS PRODUTOS --- */
        .container-btn-todos {
            text-align: center;
            margin-top: 35px;
        }

        .btn-ver-todos {
            display: inline-block;
            background-color: #d17088;
            color: #ffffff;
            padding: 12px 28px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.2s, transform 0.2s;
            box-shadow: 0 4px 8px rgba(209, 112, 136, 0.3);
        }

        .btn-ver-todos:hover {
            background-color: #b5566e;
            transform: scale(1.03);
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- BANNER DE DESTAQUE -->
    <div class="banner-principal">
        <!-- Substitua 'sua-imagem-banner.jpg' pelo caminho da sua imagem real -->
        <img src="https://via.placeholder.com/1200x350/f8d7da/5a3e36?text=Novidades+da+Semana" alt="Banner de Promoção CadernoVivo">
    </div>

    <main class="secao-produtos">
        <h2>Produtos Mais Vendidos</h2>

        <div class="grid-produtos">
            
            <!-- Produto 1 -->
            <div class="card-produto">
                <img src="https://via.placeholder.com/200" alt="Caderno Pautado">
                <h3>Caderno Pautado A5</h3>
                <p class="preco">R$ 29,90</p>
                <a href="produto.php?id=1" class="btn-comprar">Ver Detalhes</a>
            </div>

            <!-- Produto 2 -->
            <div class="card-produto">
                <img src="https://via.placeholder.com/200" alt="Planner Semanal">
                <h3>Planner Semanal Rosa</h3>
                <p class="preco">R$ 45,00</p>
                <a href="produto.php?id=2" class="btn-comprar">Ver Detalhes</a>
            </div>

            <!-- Produto 3 -->
            <div class="card-produto">
                <img src="https://via.placeholder.com/200" alt="Bloco de Notas">
                <h3>Bloco de Notas A6</h3>
                <p class="preco">R$ 15,90</p>
                <a href="produto.php?id=3" class="btn-comprar">Ver Detalhes</a>
            </div>

            <!-- Produto 4 -->
            <div class="card-produto">
                <img src="https://via.placeholder.com/200" alt="Kit Canetas Pastel">
                <h3>Kit Canetas Pastel</h3>
                <p class="preco">R$ 32,50</p>
                <a href="produto.php?id=4" class="btn-comprar">Ver Detalhes</a>
            </div>

        </div>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>