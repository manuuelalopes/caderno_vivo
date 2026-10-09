<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - CadernoVivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f5;
            margin: 20px;
        }

        .container-sobre {
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            color: #5a3e36;
        }

        .container-sobre h1 {
            color: #5a3e36;
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .container-sobre .subtitulo {
            text-align: center;
            color: #d17088;
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .conteudo-texto {
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 30px;
        }

        .conteudo-texto p {
            margin-bottom: 18px;
        }

        /* Highlight para os valores/diferenciais */
        .valores-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }

        .valor-card {
            background-color: #fff0f5;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #f8d2dc;
        }

        .valor-card h3 {
            color: #d17088;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        /* Botão de voltar */
        .container-btn-voltar {
            text-align: center;
            margin-top: 30px;
        }

        .btn-voltar {
            display: inline-block;
            background-color: #5a3e36;
            color: #ffffff;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.2s, transform 0.2s;
        }

        .btn-voltar:hover {
            background-color: #d17088;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="container-sobre">
        <h1>Sobre o CadernoVivo</h1>
        <p class="subtitulo">Organização, afeto e criatividade em cada página</p>

        <div class="conteudo-texto">
            <p>
                O <strong>CadernoVivo</strong> nasceu do amor pela papelaria e da crença de que colocar ideias no papel é o primeiro passo para transformar sonhos em realidade.
            </p>
            <p>
                Nossa missão é oferecer produtos de papelaria que unam funcionalidade, delicadeza e alta qualidade. Cada caderno, planner e bloco de notas é pensado para inspirar a sua rotina de estudos, trabalho ou planejamento pessoal.
            </p>

            <div class="valores-grid">
                <div class="valor-card">
                    <h3>Qualidade</h3>
                    <p>Papéis com gramatura ideal para suas anotações e canetas favoritas.</p>
                </div>
                <div class="valor-card">
                    <h3>Carinho</h3>
                    <p>Design exclusivo pensado nos mínimos detalhes para o seu dia a dia.</p>
                </div>
                <div class="valor-card">
                    <h3>Organização</h3>
                    <p>Ferramentas práticas para manter suas rotinas simples e produtivas.</p>
                </div>
            </div>

            <p>
                Agradecemos por fazer parte da nossa história e por nos deixar acompanhar a sua trajetória!
            </p>
        </div>

        <!-- Botão para voltar ao index.php na raiz -->
        <div class="container-btn-voltar">
            <a href="../index.php" class="btn-voltar">← Voltar para o Início</a>
        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>
</body>
</html>