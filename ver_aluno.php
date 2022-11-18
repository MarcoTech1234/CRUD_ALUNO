<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc">
            <thead>
                <th>Nome</th>
                <th>Idade</th>
                <th>Altura</th>
                <th>Escolaridade</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';
                    $consulta = "SELECT * FROM aluno";
                    $consulta_aluno = mysqli_query($conexao, $consulta);

                    while($linha = mysqli_fetch_array($consulta_aluno)){
                        echo '<tr><td>' . $linha['nome'] . '</td>';
                        echo '<td>' . $linha['idade'] . '</td>';
                        echo '<td>' . $linha['altura'] . '</td>';
                        echo '<td>' . $linha['escolaridade'] . '</td>';                        
                ?>

                <td><a href="deleta_aluno.php?codigo=<?php echo $linha['codigo']; ?>">
                    <input type="submit" value="DELETAR">
                </a></td>
            
                <td><a href="Aluno.php?editar=<?php echo $linha['codigo']; ?>">
                    <input type="submit" value="EDITAR">
                </a></td>          
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="aluno.php"><input type="submit" value="VOLTAR"/></a>
    </body>
</html>