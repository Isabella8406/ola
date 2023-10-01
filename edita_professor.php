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
    $consulta = "SELECT * FROM professor";
    $consulta_professor = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta_professor)){
        if($linha['codigo'] == $_GET['editar']){ ?>

<form method="post" action="processa_edita_professor.php">
    <input type="hidden" name=codigo value="<?php echo $linha['codigo']; ?>"/><br>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $linha['nome']; ?>"/><br>
        <label>Idade:</label>
        <input type="number" name="idade" value="<?php echo $linha['idade']; ?>"/><br>
        <label>Rg:</label>
        <input type="number" name="rg" value="<?php echo $linha['rg']; ?>"/><br>
        <label>CPF:</label>
        <input type="number" name="cpf" value="<?php echo $linha['cpf']; ?>"/><br>
        <label>Especialidade:</label>
        <input type="text" name="especialidade" value="<?php echo $linha['especialidade']; ?>"/><br>
        <label>Valor Aula:</label>
        <input type="text" name="valor_aula" value="<?php echo $linha['valor_aula']; ?>"/><br>


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