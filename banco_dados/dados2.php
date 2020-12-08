<?php 

require_once "dados.php";

function cadastro($conexao){

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];


    $stmt = "INSERT INTO pacientes (cpf, nome, idade, peso, altura) VALUES ('{$cpf}','{$nome}','{$idade}','{$peso}','{$altura}')";
    mysqli_query($conexao, $stmt);
    if (mysqli_affected_rows($conexao) > 0) {
        echo "Adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar ao banco de dados!";
    }
    mysqli_close($conexao);

}

    cadastro($conexao);
?>