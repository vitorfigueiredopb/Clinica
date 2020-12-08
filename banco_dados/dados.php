<?php
     
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "dados_pessoais";
    $port = "3306";

    //pdo -> abstração para acessar qualquer banco de dados (postgree, workbench,oracle, etc..)
    // caminho -> mysql://localhost:3306/dados_pessoais
    $conexao = mysqli_connect($servername, $username, $password, $bdname, $port);

    if(!$conexao) {
        die ("erro ao tentar se conectar com o banco de dados: ".msqli_connect_error());

    }
?>