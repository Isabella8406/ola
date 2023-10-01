<?php
    include 'conexao.php'; //Inclusão da conexão

    //Receba os 4 valores do formulário anulo.html
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];

    $insere_aluno = "INSERT INTO    aluno(nome, idade, cpf, escolaridade)
                         VALUES ('$nome', $idade, $cpf, '$escolaridade')";
    
    mysqli_query($conexao, $insere_aluno);


    header('location: ver_aluno.php');
?>