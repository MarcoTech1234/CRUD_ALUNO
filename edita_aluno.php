<?php

    include 'conexao.php';

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $escolaridade = $_POST['escolaridade'];

    $consulta = "UPDATE aluno SET nome = '$nome',
                                 idade = $idade,
                                altura = $altura,
                          escolaridade = '$escolaridade'
                              WHERE codigo = $codigo";
    
    mysqli_query($conexao, $consulta);

    header('location: ver_aluno.php');
?>