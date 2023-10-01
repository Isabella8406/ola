<?php
    include 'conexao.php'; //Inclusão da conexão

    //Receba os 4 valores do formulário anulo.html
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $carga_horaria = $_POST['carga_horaria'];
    $area = $_POST['area'];

    $insere_curso = "INSERT INTO    curso(nome, descricao, carga_horaria, area)
                         VALUES ('$nome', '$descricao', $carga_horaria, '$area')";
    
    mysqli_query($conexao, $insere_curso);


    header('location: ver_curso.php');
?>