<?php

include 'conexao.php';

$querySelect = $link->query("select * from matricula where matricula = '$matricula'");


$pesquisar = $_POST['busca'];
$result_matricula = "SELECT * from matricula where matricula like '$pesquisar'";
$result_matricula = mysqli_query ($link, $result_matricula);

while($rows_matricula = mysqli_fetch_array($result_matricula)):
    echo "Nome:" .$rows_matricula['nome']."<br>";
     
    echo"<tr>";
    echo"<td>$nome</td>";
    echo"<tr>";
endwhile

?>