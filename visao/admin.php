<!DOCTYPE html>
<?php
require_once 'menu.php';
require "../Modelo/Autenticacao.php";

require_once('../Repositorio/conexao.php');
require_once('../Modelo/Produto.php');
require_once('../Repositorio/ProdutoRepositorio.php');

$produtoRepositorio = new ProdutoRepositorio($conn);
$produtos = $produtoRepositorio->buscarTodos();


?>
<link rel="preconnect" href="https://fonts.google
<html lang="pt-br>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="../assets/css/menu.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="../assets/img/logojanela.png" rel="icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>MagicalBakery - Admin</title>
</head>

<body>
  <main>
  <section class="container-admin-banner">
    <img src="../assets/img/logo.png" alt="Descrição da imagem">
</section>
   
  </section>
  <h2>Lista de Produtos</h2>

  <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
          <th colspan="2">Ação</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach ($produtos as $produto) : ?>
            <tr>
              <td><?= $produto->getNome();  ?></td>
              <td><?= $produto->getTipo();  ?></td>
              <td><?= $produto->getDescricao();  ?></td>
              <td>R$ <?= $produto->getPreco();  ?></td>
              <td>
                <form action="editar-produto.php" method="POST">
                  <input type="hidden" name="id" value="<?= $produto->getId(); ?>">
                  <input type="hidden" name="tipo" value="<?= $produto->getTipo(); ?>">
                  <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                  <input type="submit" class="botao-editar" value="Editar">
                </form>

              </td>
              <td>
                <form action="excluir-produto.php" method="POST">
                  <input type="hidden" name="id" value="<?= $produto->getId(); ?>">
                
                  <input type="hidden" name="tipo" value="<?= $produto->getTipo(); ?>">
                  <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                  <input type="submit" class="botao-excluir" value="Excluir">
                </form>
              </td>
            </tr>

          </tbody>
          <?php endforeach; ?>
    </table>
      <form action="cadastrar-produto.php" method="POST">
        
        
        <input type="submit" class="botao-cadastrar" name="cadastrar" value="Cadastrar produto">
      </form>
    </section>
  </main>
</body>
</html>