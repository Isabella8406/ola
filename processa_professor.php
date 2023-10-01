<?php
    include 'conexao.php'; //Inclusão da conexão

    //Receba os valores do formulário professor.html
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $rg= $_POST['rg'];
    $cpf = $_POST['cpf'];
    $especialidade = $_POST['especialidade'];
    $valor_aula = $_POST['valor_aula'];

    $insere_professor = "INSERT INTO professor(nome, idade, rg, cpf, especialidade, valor_aula)
                         VALUES ('$nome', $idade, '$rg', $cpf, '$especialidade', '$valor_aula')";
    
    mysqli_query($conexao, $insere_professor);


    header('location: ver_professor.php');
?>