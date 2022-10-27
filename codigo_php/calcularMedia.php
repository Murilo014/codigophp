<?php

// isset() = testa se a variavel existe 
    if (isset($_POST["nomeAluno"]) && isset($_POST["notaBimestre1"]) && isset($_POST["notaBimestre2"])){
        if(!empty($_POST["nomeAluno"]) && !empty($_POST["notaBimestre1"]) && !empty($_POST["notaBimestre2"])){
            $nomeAluno = $_POST["nomeAluno"];
            $nomePrimeiroBimestre = $_POST["notaBimestre1"];
            $nomeSegundoBimestre = $_POST["notaBimestre2"];
         
             echo "Nome do aluno: $nomeAluno";
             echo "<br>Nota Primeiro Bimestre: $nomePrimeiroBimestre";
             echo "<br>Nota Segundo Bimestre: $nomeSegundoBimestre";
         
             $media = ($nomePrimeiroBimestre + $nomeSegundoBimestre)/2;
             echo "<br>Média do Aluno: $media";
         
             if ($media >= 7){
                 echo "<br>Você está APROVADO com média: $media";
             } else if ($media < 4){
                 echo "<br> Você está REPROVADO.";
             } else if (($media >= 4) && ($media < 7)) {
                 echo "<br>Você está de EXAME.";
             }    
            
        }else{
            echo "<center><h1>Para ter acesso à pagina, tera que preencher o formulário";
            echo"<br> Para acessar o FORMULÁRIO";
            ?>
            <h1><a href="formulario.html"> Clique aqui</a></h1>
        <?php
        }
    } else {
        echo "Não há POST";
    }


    //var_dump($_POST); //função que imprimi vetor com os tipos dos campos
    //echo "<hr>";
  


?>