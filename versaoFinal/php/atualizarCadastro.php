<?php

include 'conexao.php';

$querySelect = $link->query("select * from matricula where matricula = '$pesquisar'");
    while ($registro = $querySelect->fetch_assoc()):
        $matricula = $registro['matricula'];
    endwhile;

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);

echo "$cpf<br>";
echo "$nome<br>";

$queryUpdate = $link->query("UPDATE matricula set nome='$nome', idade='$idade', cpf='$cpf', rg='$rg', sexo='$sexo', cidade='$cidade', endereco='$endereco', email='$email', celular='$celular' where matricula = '$matricula'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("busca.php");
endif;

echo "$affected_rows";

?>