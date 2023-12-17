

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link href="../assets/img/logojanela.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Cadastrar Produto</title>
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="../assets/img/logo.png" class="logo-admin" alt="logo-magical">
        <h1>Cadastro de Produtos</h1>
    </section>
    <section class="container-form">
        <form action="../controladora/processar-produtos.php" method="POST">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>
            <div class="container-radio">
                <div>
                    <label for="Bolos">Bolos</label>
                    <input type="radio" id="bolos" name="tipo" value="Bolos" checked>
                </div>
                <div>
                    <label for="Tortas">Tortas</label>
                    <input type="radio" id="torta" name="tipo" value="Torta">
                </div>
                <div>
                    <label for="Doces">Doces</label>
                    <input type="radio" id="doce" name="tipo" value="Doces">
                </div>
                <div>
                    <label for="CupCake">CupCakes</label>
                    <input type="radio" id="cupcake" name="tipo" value="CupCake">
                </div>
            </div>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" required>

            <label for="preco">Preço</label>
            <input type="text" id="preco" name="preco" placeholder="Digite uma descrição" required>

            <label for="imagem">Envie uma imagem do produto</label>
            <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar produto"/>
        </form>
    
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js"></script>
</body>
</html>