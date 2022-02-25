<?php

include 'conexao.php';

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

    echo"<tr>";
    echo"<td>$matricula</td><td>$nome</td><td>$idade</td><td>$cpf</td><td>$rg</td><td>$sexo</td><td>$cidade</td><td>$endereco</td><td>$email</td><td>$celular</td><td><a herf='edicao?id=$matricula'><i > editar</i></td><td><a href='delet?id=$id'><i >deletar</i></td>";

endwhile

?>