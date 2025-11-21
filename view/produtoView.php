<?php
/**
 * View parcial responsável por exibir um único produto.
 *
 * Espera-se que a variável $produto esteja definida antes da inclusão deste arquivo,
 * contendo os seguintes campos:
 * - 'caminho' (string): Caminho da imagem do produto.
 * - 'nome' (string): Nome do produto.
 * - 'preco' (float): Preço do produto.
 * - 'descricao' (string): Descrição do produto.
 * - 'complemento' (string): HTML adicional (ex: tags, ícones, etc).
 *
 * Este arquivo deve ser incluído dentro de um loop que percorre os produtos.
 *
 * Exemplo de uso:
 * foreach ($produtos as $produto) {
 *     include 'produtoView.php';
 * }
 *
 * @var array $produto
 */
?>

<article>
    <!-- Imagem do produto -->
    <img src="<?= $produto['caminho'] ?>" alt="<?= $produto['nome'] ?>">

    <!-- Nome do produto -->
    <h3><?= $produto['nome'] ?></h3>

    <!-- Preço formatado -->
    <p class="preco"><b>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></b></p>

    <!-- Botão para adicionar ao carrinho -->
    <a href="Carrinho.html" class="addCarrinho">Adicionar ao carrinho</a>

    <!-- Descrição com quebras de linha -->
    <p><?= nl2br($produto['descricao']) ?></p>

    <!-- Complemento HTML adicional -->
    <?= $produto['complemento'] ?>
</article>