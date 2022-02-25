<?php

include 'conexao.php';

$querySelect = $link->query("select * from matricula where matricula = 'nome'");

while ($registro = $querySelect->fetch_assoc()):
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