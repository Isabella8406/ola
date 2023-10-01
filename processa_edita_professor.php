<?php

    include 'conexao.php';

    $codigo =  $_POST['codigo'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $especialidade = $_POST['especialidade'];
    $valor_aula = $_POST['valor_aula'];


    $consulta = "UPDATE professor SET nome = '$nome', 
                                  idade = $idade,
                                  rg = '$rg',  
                                  cpf = $cpf,
                                  especialidade = '$especialidade',  
                                  valor_aula = '$valor_aula'
                                  WHERE codigo = $codigo";

    mysqli_query($conexao, $consulta);

    header('location: ver_professor.php');

    ?>

    