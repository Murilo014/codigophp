<?php
    //var_dump($_POST); //função que imprimi vetor com os tipos dos campos

   $nomeAluno = $_POST["nomeAluno"];
   $nomePrimeiroBimestre = $_POST["notaBimestre1"];
   $nomeSegundoBimestre = $_POST["notaBimestre2"];

    echo "Nome do aluno: $nomeAluno";
    echo "<br>Nota Primeiro Bimestre: $nomePrimeiroBimestre";
    echo "<br>Nota Segundo Bimestre: $nomeSegundoBimestre";

    $media = ($nomePrimeiroBimestre + $nomeSegundoBimestre)/2;
    echo "<br>Média do Aluno: $media";
?>