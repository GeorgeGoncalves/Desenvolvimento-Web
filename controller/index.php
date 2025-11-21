<?php

/**
 * Página principal do site EGGIK Cactoslentas.
 * Exibe produtos em destaque e mapa de localização.
 * Estrutura baseada em MVC: inclui views e modelos.
 */

// Incluindo o arquivo "conexaoDB.php" neste arquivo, para conectar com o banco de dados.
include("../model/conexaoDB.php");

// Id's dos produtos em destaque.
$ids = ['1', '2'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="../css/ecommerce.css">
</head>

<body>
    <?php
    // Incluindo o arquivo "header.php", onde fica o cabeçalho das páginas.
    include("../view/header.php");

    // Incluindo o arquivo "navegacao.php", onde fica a navegação do site.
    include("../view/navegacao.php");
    ?>

    <!-- Conteiner criado para melhor trabalhar o layout da página inicial. -->
    <div class="flex-container"> 

        <?php
        // Incluindo o arquivo "textoLateral.php', onde fica o texto lateral e faz parte do layout.
        include("../view/textoLateral.php");
        ?>

        <main class="main-index"><!-- Classe criada para o main de outras páginas não serem afetados. -->
            <h2>SEJA BEM-VINDO ao melhor lugar para você comprar e aprender sobre suculentas e cactos!</h2>

            <?php
            /**
             * Exibe as informações de produtos destacados.
             *
             * Espera-se que a variável $produto seja um array associativo com as seguintes chaves:
             * - 'caminho' (string): Caminho relativo da imagem do produto.
             * - 'nome' (string): Nome do produto.
             * - 'preco' (float): Preço do produto.
             * - 'descricao' (string): Descrição detalhada do produto.
             * - 'complemento' (string): HTML adicional ou informações complementares.
             * - 'tamanho' (int): Tamanho que a imagem deve ser exibida.
             *
             * O HTML gerado inclui:
             * - Imagem do produto com atributo alt acessível.
             * - Nome do produto como título.
             * - Preço formatado em reais (R$).
             * - Link para adicionar ao carrinho.
             * - Descrição com quebras de linha preservadas.
             * - Complemento renderizado diretamente.
             *
             * @var array $produto
             */

            // Inclui o arquivo "produtoModel.php", para fazer a busca no banco de dados.
            include("../model/produtoModel.php");
            
            foreach ($ids as $id) {
                $produto = buscarProdutoPorId($conexao, $id);
                if ($produto) {
                    // Inclui a view para exibir o produto.
                    include('../view/destaqueView.php');
                }
            }
            ?>

            <div class="mapa">
                <h4>Venha nos visitar</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.438891107452!2d-43.966141224950505!3d-19.905901681477104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690cb2fad5a37%3A0xcb14f7c2f55fe281!2sNewton%20Paiva%20-%20Unidade%20Carlos%20Luz%20-%20Wyden!5e0!3m2!1spt-BR!2sbr!4v1758469831469!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>

        <?php
        // Incluindo o arquivo "loremIpsu.php', onde fica o texto lateral e faz parte do layout.
        include("../view/textoLateral.php");
        ?>
    </div>

    <?php
    // Incluindo o arquivo "footer.php", onde fica o rodapé do site.
    include("../view/footer.php");
    ?>

</body>

</html>