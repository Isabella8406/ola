<?php
    $servidor = "localhost";  //Servidor local
    $usuario = "root";        //User do XAMPP
    $senha = "";              //Senha do XAMPP
    $banco = "escola";        //Nome do banco

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    //Função mysqli_connect estabelecerá conexão com o MySQL

?>