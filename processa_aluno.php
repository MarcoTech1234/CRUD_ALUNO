<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $escolaridade = $_POST['escolaridade'];

    $consulta = "INSERT INTO aluno(nome, idade, altura, escolaridade)
                       VALUES ('$nome', $idade, $altura, '$escolaridade')";

    mysqli_query($conexao, $consulta);

    header('location: ver_aluno.php');
?>