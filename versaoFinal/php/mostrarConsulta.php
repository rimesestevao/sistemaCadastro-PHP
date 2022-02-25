<?php

include 'conexao.php';

$pesquisar = $_POST['busca'];
$result_matricula = "SELECT * from matricula where matricula like '$pesquisar'";
$result_matricula = mysqli_query ($link, $result_matricula);

while ($registro = $result_matricula->fetch_assoc()):
    $matricula = $registro['matricula'];
    $nome = $registro['nome'];
    $idade = $registro['idade'];
    $cpf = $registro['cpf'];
    $rg = $registro['rg'];
    $sexo = $registro['sexo'];
    $cidade = $registro['cidade'];
    $endereco = $registro['endereco'];
    $email = $registro['email'];
    $celular = $_GET['celular'];

    echo"<tr>";
    echo"<td>$nome</td>";
    echo"<tr>";
endwhile

?>