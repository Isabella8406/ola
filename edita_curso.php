<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fds</title>
</head>
<body>
    
    <?php
    include 'conexao.php';
    $consulta = "SELECT * FROM curso";
    $consulta_curso = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta_curso)){
        if($linha['codigo'] == $_GET['editar']){ ?>

<form method="post" action="processa_edita_curso.php">
    <input type="hidden" name=codigo value="<?php echo $linha['codigo']; ?>"/><br>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $linha['nome']; ?>"/><br>
        <label>Decriçãp:</label>
        <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"/><br>
        <label>Carga-Horária:</label>
        <input type="number" name="carga_horaria" value="<?php echo $linha['carga_horaria']; ?>"/><br>
        <label>Área:</label>
        <input type="text" name="area" value="<?php echo $linha['area']; ?>"/><br>

        <input type="submit" value="CADASTRAR">
    </form>

            <?php
        }
        ?>

        <?php
    }
    ?>

</body>
</html>