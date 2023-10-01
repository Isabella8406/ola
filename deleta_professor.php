<?php

include 'conexao.php';

$codigo = $_GET['codigo'];
$consulta = "DELETE FROM professor WHERE codigo = $codigo";

mysqli_query($conexao, $consulta);

header('location: ver_professor.php');
?>