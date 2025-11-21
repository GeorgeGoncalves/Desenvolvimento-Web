<?php
/**
 * View parcial responsável por exibir um produto em destaque.
 *
 * Espera-se que a variável $produto esteja definida antes da inclusão deste arquivo,
 * contendo os seguintes campos:
 * - 'caminho' (string): Caminho da imagem do produto.
 * - 'nome' (string): Nome do produto.
 * - 'preco' (float): Preço do produto.
 * - 'descricao' (string): Descrição detalhada do produto.
 * - 'complemento' (string): HTML adicional (ex: tags, ícones, etc).
 * - 'tamanho' (int|string): Tamanho da imagem (usado como largura e altura).
 *
 * Este arquivo deve ser incluído dentro de um loop que percorre os produtos em destaque.
 *
 * Exemplo de uso:
 * foreach ($idsDestaque as $id) {
 *     $produto = buscarProdutoPorId($conexao, $id);
 *     include 'destaqueView.php';
 * }
 *
 * @var array $produto
 */
?>

<!-- Mostra na tela os produtos em destaque -->
<article id="noticiadestaque">
    <!-- Imagem do produto com tamanho definido -->
    <img src="<?= $produto['caminho'] ?>" alt="<?= $produto['nome'] ?>" width="<?= $produto['tamanho'] ?>" height="<?= $produto['tamanho'] ?>">

    <!-- Nome do produto -->
    <h3><?= $produto['nome'] ?></h3>

    <!-- Preço e botão de adicionar ao carrinho -->
    <div class="preco-btnCarrinho">
        <p class="preco"><b>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></b></p>
        <a href="Carrinho.html" class="addCarrinho">Adicionar ao carrinho</a>
    </div>

    <!-- Descrição com quebras de linha -->
    <p><?= nl2br($produto['descricao']) ?></p>

    <!-- Complemento HTML adicional -->
    <?= $produto['complemento'] ?>
</article>