<?php
   include "conexao.php";

    $pesquisar = $_POST['busca'];
    $result_matricula = "SELECT * from matricula where matricula like '$pesquisar'";
    $result_matricula = mysqli_query ($conn, $result_matricula);
    

    while($rows_matricula = mysqli($result_matricula)){
        echo "Número da matricula:" .$rows_matricula['matricula']."<br>";
    }
        

?>