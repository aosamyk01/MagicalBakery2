<?php



session_start(); 


if (!isset($_SESSION["usuario"]) ) {
    if (!isset($_POST['usuario'])){
        $usuario =  $_POST['usuario'];
        header("Location: login.php?erro=usuario não logado!");
        exit;
    
    }
    $_SESSION['usuario'] = $_POST['usuario'];
   
}

  

else {
  header("Location: login.php");
  exit;
}
include 'menu.php';
include '..\Repositorio\conexao.php';
include '..\Modelo\Produto.php';
include '..\Repositorio\ProdutoRepositorio.php';

$produtosRepositorio = new ProdutoRepositorio($conn);


$tipo = $_POST['tipo'];
$id = $_POST['id'];
$produto = null;

if ($tipo == 'Bolos') {
  $produto = $produtosRepositorio->listarBolosPorId($id);
} elseif ($tipo == 'Torta') {
  $produto = $produtosRepositorio->listarTortaPorId($id);
} elseif ($tipo == 'CupCake') {
  $produto = $produtosRepositorio->listarCupCakePorId($id);
} else {
  $produto = $produtosRepositorio->listarDocesPorId($id);
}




?> 
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="../assets/img/logojanela.png" rel="icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Magical Bakery - Editar Produto</title>
</head>

<body>
  <main>
    <section class="container-admin-banner">
    <img src="../assets/img/logo.png" alt="Descrição da imagem">
      <h1>Editar Produto</h1>
    </section>
    <section class="container-form">
      <form method="POST" action="../controladora/processar-editar-produto.php" id="editarForm" enctype="multipart/form-data">

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nomeP" value="<?= $produto->getNome(); ?>" required>
<br>
        <div class="container-radio">
          <div>
          <label for="Bolos">Bolos</label>
                    <input type="radio" id="bolos" name="tipo" value="Bolos" checked>
                </div>
                <div>
                    <label for="Tortas">Torta</label>
                    <input type="radio" id="torta" name="tipo" value="Torta">
                </div>
                <div>
                    <label for="Doces">Doce</label>
                    <input type="radio" id="doce" name="tipo" value="Doces">
                </div>
                <div>
                    <label for="CupCake">CupCake</label>
                    <input type="radio" id="cupcake" name="tipo" value="CupCake">
                </div>
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" value="<?= $produto->getDescricao(); ?>" required>
<br>
        <label for="preco">Preço</label>
        <input type="text" id="preco" name="preco" value="<?= $produto->getPreco(); ?>" required>

        <?php $imagemfake = $produto->getImagem();


        // Remove a parte "C:\fakepath\" do valor (apenas no caso de navegadores baseados em Windows)
        $imagem = basename($imagemfake);

        // Agora, $imagem conterá apenas o nome do arquivo, sem a parte "C:\fakepath\"
        ?>
        <label for="imagem">Envie uma nova imagem do produto ou mantenha a imagem atual:
          <div class="container-foto">
            <img src="<?= $produto->getImagem(); ?>" alt="<?= $produto->getImagem(); ?>" width="200">
          </div><?= $produto->getImagem();//$imagem;
           ?>
        </label>
        <input type="file" name="imagem" accept="image/*" id="imagem" value="<?php echo $imagem; ?>">
      
        <input type='hidden' name='usuario' value=<?= $_SESSION['usuario'];?>>
        <input type="hidden" name="id" id="id" value="<?= $produto->getId(); ?>">
        <input type="submit" name="editar" class="botao-cadastrar" value="Editar produto" />
      </form>

    </section>
  </main>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/index.js"></script>
</body>

</html>