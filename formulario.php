<?php
    include_once("conexao.php");
    $vnome=$_POST ["name"];
    $vemail=$_POST ["email"];

    $result_tabalunos = "INSERT INTO alunos (nome, email) VALUES ('$vnome','$vemail')";
    $resultado_tabalunos = mysqli_query($conn, $result_tabalunos);
?>