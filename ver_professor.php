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
        <th>RG</th>
        <th>CPF</th>
        <TH>ESPECIALIDADE</TH>
        <th>valor_aula</th>
        <tbody>
            <?php
                include 'conexao.php'; //Chama a conexão

                $consulta = "SELECT * FROM professor"; //Selecione dados da tabela de aluno
                $consulta_professor = mysqli_query($conexao, $consulta); //Estabelece conexão
                //Laço de repetição para varrer cada linha da tabela de alunos
                while($linha = mysqli_fetch_array($consulta_professor)){
                    echo '<tr><td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['idade'] . '</td>';
                    echo '<td>' . $linha['rg'] . '</td>';
                    echo '<td>' . $linha['cpf'] . '</td>';
                    echo '<td>' . $linha['especialidade'] . '</td>';
                    echo '<td>' . $linha['valor_aula'] . '</td>';
            ?>
            
            <td>
                <a href="edita_professor.php?editar=
                <?php echo $linha['codigo']; ?>">
                <input type="submit" value="EDITAR"/>
                </a> </td>


            <td>
                <!-- Aqui pega a linha do código do PROFESSOR e deleta -->
                <a href="deleta_professor.php?codigo= 
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