<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(!isset($_GET['editar'])){ ?>

        <form method="POST" action="processa_aluno.php">
            <h2>INSERIR ALUNO</h2>
            <label><h3>Nome:</h3></label>
            <input type="text" name="nome" placeholder="Digite o nome"/>
            <br><br>
            <label><h3>Idade:</h3></label>
            <input type="number" name="idade" placeholder="Digite a idade"/>
            <br><br>
            <label><h3>Altura:</h3></label>
            <input type="text" name="altura" placeholder="Digite a altura"/>
            <br><br>
            <label><h3>Escolaridade:</h3></label>
            <input type="text" name="escolaridade" placeholder="Digite a escolaridade"/>
            <br><br>

            <input type="submit" value="CADASTRAR">
        </form>

        <?php }else{ ?>

        <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM aluno";
            $consulta_aluno = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_aluno)){
                if($linha['codigo'] == $_GET['editar']){
        ?>

        <form method="POST" action="edita_aluno.php">
            <h2>EDITAR ALUNO</h2>
            <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
            <label><h3>Nome:</h3></label>
            <input type="text" name="nome" value="<?php echo $linha['nome'];?>"/>
            <br><br>
            <label><h3>Idade:</h3></label>
            <input type="number" name="idade" value="<?php echo $linha['idade']; ?>"/>
            <br><br>
            <label><h3>Altura:</h3></label>
            <input type="text" name="altura" value="<?php echo $linha['altura']; ?>"/>
            <br><br>
            <label><h3>Escolaridade:</h3></label>
            <input type="text" name="escolaridade" value="<?php echo $linha['escolaridade'] ?>"/>
            <br><br>

            <input type="submit" value="EDITAR">
        </form>
        <?php } ?> <!--FECHA O IF -->
        <?php } ?> <!--FECHA O WHILE -->
        <?php } ?> <!--FECHA O ELSE -->
    </body>
</html>