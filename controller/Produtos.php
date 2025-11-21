<?php
// Incluindo o arquivo "conexaoDB.php" neste arquivo, para conectar com o banco de dados.
include("../model/conexaoDB.php");

// Id's dos produtos deverão ser impressos.
$ids = [1, 2, 3, 4, 5, 6, 7];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <link rel="stylesheet" href="../css/ecommerce.css">
</head>

<body>
    <?php
    // Incluindo o arquivo "header.php", onde fica o cabeçalho das páginas.
    include("../view/header.php");

    // Incluindo o arquivo "navegacao.php", onde fica a navegação do site.
    include("../view/navegacao.php");
    ?>

    <main>
        <h2>Produtos para compras</h2>

        <div class="flex-container-produtos">

            <?php
            /**
             * Exibe as informações de produtos destacados e produtos normais.
             *
             * Espera-se que a variável $produto seja um array associativo com as seguintes chaves:
             * - 'caminho' (string): Caminho da imagem no diretório.
             * - 'nome' (string): Nome do produto.
             * - 'preco' (float): Preço do produto.
             * - 'descricao' (string): Descrição detalhada do produto.
             * - 'complemento' (string): HTML adicional e informações complementares.
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
                    include('../view/produtoView.php');
                }
            }
            ?>
        </div>

    </main>

    <?php
    // Incluindo o arquivo "footer.php", onde fica o rodapé do site.
    include("../view/footer.php");
    ?>
</body>

</html>