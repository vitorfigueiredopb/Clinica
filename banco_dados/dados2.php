<?php 

require_once "dados.php";
function cadastro($conexao){

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];


    $stmt = "INSERT INTO dados_pessoais (id, nome, idade, peso, altura) VALUES (null,'{$nome}','{$idade}','{$peso}','{$altura}')";
        mysqli_query($conexao, $stmt);
        mysqli_close($conexao);

}

    cadastro($conexao);
?>