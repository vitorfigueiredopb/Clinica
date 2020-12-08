<?php
     
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "dados_pessoais";

    //pdo -> abstração para acessar qualquer banco de dados (postgree, workbench,oracle, etc..)
    // caminho -> mysql://localhost:3306/dados_pessoais
    $conexao = mysqli_connect($servername, $username, $password, $bdname);

    if(!$conexao) {
        die ("erro ao tentar se conectar com o banco de dados: ".mysqli_connect_error());

    }
?>