<?php

    include 'conexao.php';

    $codigo =  $_POST['codigo'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $carga = $_POST['carga_horaria'];
    $area = $_POST['area'];

    $consulta = "UPDATE curso SET nome = '$nome', 
                                  descricao = '$descricao',
                                  carga_horaria = '$carga_horaria',  
                                  area = '$area'
                                  WHERE codigo = $codigo";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');

    ?>

    