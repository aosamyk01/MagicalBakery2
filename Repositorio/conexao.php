<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "magicalbakery_phpoo";

//criação da conexão
$conn = new mysqli($servername, $username, $password, $databasename);

// verificando a conexão
if (!$conn){
    //die("conexão falhou".mysqli_connect_error());
    echo "não foi possível conectar ao banco de dados";
};
?>