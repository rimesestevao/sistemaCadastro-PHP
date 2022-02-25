<?php

include 'conexao.php';

$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$querySelect = $link->query("select * from matricula where matricula = '$matricula'");

while ($registro = $querySelect->fetch_assoc()):
    $matricula = $rowcount + 1;
    $nome = $registro['nome'];
    $idade = $registro['idade'];
    $cpf = $registro['cpf'];
    $rg = $registro['rg'];
    $sexo = $registro['sexo'];
    $cidade = $registro['cidade'];
    $endereco = $registro['endereco'];
    $email = $registro['email'];
    $celular = $_GET['celular'];
endwhile

?>