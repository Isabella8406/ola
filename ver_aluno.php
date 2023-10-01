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
        <th>Idade</th>
        <th>CPF</th>
        <th>Escolaridade</th>
        <tbody>
            <?php
                include 'conexao.php'; //Chama a conexão

                $consulta = "SELECT * FROM aluno"; //Selecione dados da tabela de aluno
                $consulta_alunos = mysqli_query($conexao, $consulta); //Estabelece conexão
                //Laço de repetição para varrer cada linha da tabela de alunos
                while($linha = mysqli_fetch_array($consulta_alunos)){
                    echo '<tr><td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['idade'] . '</td>';
                    echo '<td>' . $linha['cpf'] . '</td>';
                    echo '<td>' . $linha['escolaridade'] . '</td>';
            ?>
            
            <td>
                <!-- Aqui pega a linha do código do aluno e deleta -->
                <a href="deleta_aluno.php?codigo= 
            <?php echo $linha['codigo']; ?>">
            <input type="submit" value="DELETAR"/>
                </a> </td> </tr>


            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>