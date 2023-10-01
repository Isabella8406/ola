<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=                  , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid #ccc">
        <th>Nome</th>
        <th>Descrição</th>
        <th>Carga horaria</th>
        <th>Área</th>
        <tbody>
            <?php
                include 'conexao.php'; //Chama a conexão

                $consulta = "SELECT * FROM curso"; //Selecione dados da tabela de aluno
                $consulta_cursos = mysqli_query($conexao, $consulta); //Estabelece conexão
                //Laço de repetição para varrer cada linha da tabela de alunos
                while($linha = mysqli_fetch_array($consulta_cursos)){
                    echo '<tr><td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['descricao'] . '</td>';
                    echo '<td>' . $linha['carga_horaria'] . '</td>';
                    echo '<td>' . $linha['area'] . '</td>';
                
            ?>

            <td>
                <a href="edita_curso.php?editar=
                <?php echo $linha['codigo']; ?>">
                <input type="submit" value="EDITAR"/>
                </a> </td>

<td>
                <!-- Aqui pega a linha do código do aluno e deleta -->
                <a href="deleta_curso.php?codigo= 
            <?php echo $linha['codigo']; ?>">
            <input type="submit" value="DELETAR"/>
                </a> </td> </tr>
                </td>

                <?php
                }
                ?>


        </tbody>
    </table>
</body>
</html>