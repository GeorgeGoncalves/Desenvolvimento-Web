<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <link rel="stylesheet" href="../css/ecommerce.css">
</head>

<body>
    <?php
    // Incluindo o arquivo "header.php", onde fica o cabeçalho das páginas.
    include("../view/header.php");

    // Incluindo o arquivo "navegacao.php", onde fica a navegação do site.
    include("../view/navegacao.php");
    ?>

    <!-- Classe criada para faciltita o trabalho e reutilizada nos formulários do fale conosco. -->
    <main class="container-formulario">


        <h2>Carrinho</h2>

        <form action="meuProduto" method="get">
            <fieldset>
                <legend>Produtos selecionados</legend>

                <div class="div-central-formulario">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" value="Rosa do deserto viúva negra" size="30">
                </div>

                <br>

                <div class="div-central-formulario">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" id="quantidade" name="qnt" value="3" size="1">
                </div>

                <br>

                <div class="div-central-formulario">
                    <label for="valor">Valor</label>
                    <input type="text" id="valor" value="236,70" size="6">
                </div>
            </fieldset>
        </form>

        <form action="meuCartao.php" method="post">
            <fieldset>
                <legend>Pagamento no cartão</legend>

                <label for="cartao">N° do cartão</label>
                <input type="text" id="cartao" name="cartao" minlength="4" maxlength="4" size="1" value="0009">
                <input type="text" id="cartao1" name="cartao1" minlength="4" maxlength="4" size="1" value="1234">
                <input type="text" id="cartao2" name="cartao2" minlength="4" maxlength="4" size="1" value="0987">
                <input type="text" id="cartao3" name="cartao3" minlength="4" maxlength="4" size="1" value="6543">

                <br>

                <label for="vencimento">Data de vencimento</label>
                <input type="text" id="vencimento" name="vencimento" minlength="5" maxlength="5" size="6" value="01/50">

                <br>

                <label for="codSeguranca">Código de segurança</label>
                <input type="text" id="codSeguranca" name="codSeguranca" minlength="3" maxlength="3" size="1"
                    value="001">

                <br>

                <input type="submit" value="COMPRAR" class="btn-formulario">
            </fieldset>
        </form>
    </main>

    <?php
    // Incluindo o arquivo "footer.php", onde fica o rodapé do site.
    include("../view/footer.php");
    ?>
</body>

</html>