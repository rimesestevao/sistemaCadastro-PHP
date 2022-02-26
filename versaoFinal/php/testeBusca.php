<?php
    
    $servername = "127.0.0.1";
    $database = "riogamer";
    $username = "riogamer";
    $password = "abelha2021";

    // Create connection
    $link = new mysqli($servername, $username, $password, $database);

    // Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    echo "Connected successfully";
        
    $pesquisar = $_POST['busca'];

    echo"<br>$pesquisar<br>";


    
    $result_matricula = "SELECT * from matricula where matricula like '$pesquisar'";
    $result_matricula = mysqli_query ($link,$pesquisar);
    
    while($rows_matricula = mysqli_fetch_array($result_matricula)){
        echo "Nome:" .$rows_matricula['nome']."<br>";
    }

?>