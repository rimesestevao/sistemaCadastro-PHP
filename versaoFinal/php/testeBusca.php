<?php
    include 'conexao.php';
    
    $pesquisar = $_POST['busca'];

    echo"<br>$pesquisar<br>";


    
    $result_matricula = "SELECT * from matricula where matricula like '$pesquisar'";
    $result_matricula = mysqli_query ($link,$pesquisar);
    
    while($rows_matricula = mysqli_fetch_array($result_matricula)){
        echo "Nome:" .$rows_matricula['nome']."<br>";
    }

?>