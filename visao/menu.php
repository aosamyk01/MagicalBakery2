<!DOCTYPE html>
<html>

<head>
    <title>Menu do Usuário</title>

    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="menu">
        <div class="user-info dropdown">
            <div class="user-photo">
                <link href="../assets/img/logojanela.png" rel="icon">
            </div>
            <div class="user-photo">
                <img src="../assets/img/usuario1.png" alt="Foto do Usuário">
            </div>




            <div class="dropdown-content">
                <!-- Conteúdo do dropdown -->
                <form id="inicioForm" action="index.php" method="post" style="display: none;">

                    <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                    <input type="hidden" name="nome" value="<?= $_SESSION['nome']; ?>">
                    <input type="hidden" name="teste" value="<?= "true"; ?>">

                </form>

                <a class="dropdown-item" href="#" onclick="enviarParaInicio();">Início</a>

                <!-- Use um formulário para redirecionar para admin.php -->
                <form id="adminForm" action="admin.php" method="post" style="display: none;">

                    <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                    <input type="hidden" name="nome" value="<?= $_SESSION['nome']; ?>">
                </form>

                <form id="bolo" action="bolo.php" method="post" style="display: none;">

                    <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                    <input type="hidden" name="nome" value="<?= $_SESSION['nome']; ?>">
                </form>

                <form id="torta" action="torta.php" method="post" style="display: none;">

                    <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                    <input type="hidden" name="nome" value="<?= $_SESSION['nome']; ?>">
                </form>

                <form id="doce" action="doce.php" method="post" style="display: none;">

                    <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                    <input type="hidden" name="nome" value="<?= $_SESSION['nome']; ?>">
                </form>

                <form id="cupcake" action="cupcake.php" method="post" style="display: none;">

                    <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']; ?>">
                    <input type="hidden" name="nome" value="<?= $_SESSION['nome']; ?>">
                </form>
                <!-- Passa os dados diretamente para o JavaScript -->
                <a class="dropdown-item" href="#" onclick="enviarParaAdmin();">Admin</a>

                <a class="dropdown-item" href="login.php" onclick="logout();">Sair</a>
            </div>
        </div>
        <!--<button class="logout-button" onclick="voltar()">Voltar</button> -->
    </div>
    <script>
        function enviarParaAdmin() {
            document.getElementById('adminForm').submit();
        }

        function bolo() {
            document.getElementById('bolo').submit();
        }

        function torta() {
            document.getElementById('torta').submit();
        }

        function doce() {
            document.getElementById('doce').submit();
        }

        function cupcake() {
            document.getElementById('cupcake').submit();
        }





        function voltar() {
            window.history.back(); // Isso retorna para a página anterior no histórico do navegador
        }
    </script>
    <script>
        function enviarParaInicio() {
            document.getElementById('inicioForm').submit();
        }
    </script>
    <script>
        function logout() {
            // Aqui você pode adicionar lógica para encerrar a sessão, por exemplo:
            // session_start();
            // <?php session_destroy(); ?>

            // Redireciona para a página de login
            window.location.href = 'login.php';
        }
    </script>
</body>

</html>