<?php

/**
 * Busca os dados de um produto específico na tabela  pelo ID.
 *
 * @param mysqli $conexao Conexão ativa com o banco de dados MySQL.
 * @param int $id ID do produto a ser buscado.
 *
 * @return array|null Retorna um array associativo com os dados do produto (id, nome, caminho, preco, descricao, complemento),
 * ou null se nenhum produto for encontrado.
 *
 * @example
 * $produto = buscarProdutoPorId($conexao, 1);
 * echo $produto['nome'];
 */

function buscarProdutoPorId($conexao, $id) {
    // Monta a query diretamente.
    $sql = "SELECT * FROM Produtos WHERE id = $id";

    // Executa a query.
    $resultado = mysqli_query($conexao, $sql);

    // Retorna o produto como array associativo.
    return mysqli_fetch_assoc($resultado);
}


