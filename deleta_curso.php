<?php

include 'conexao.php';

$codigo = $_GET['codigo'];
$consulta = "DELETE FROM curso WHERE codigo = $codigo";

mysqli_query($conexao, $consulta);

header('location: ver_curso.php');
?>