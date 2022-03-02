<?php
session_start();
include "conexao.php";

$pesquisar = $_POST['edit'];

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);

echo "$cpf";
echo "$matricula";

$queryUpdate = $link->query("UPDATE matricula SET nome='$nome', idade='$idade', cpf='$cpf', rg='$rg', sexo='$sexo', cidade='$cidade', endereco='$endereco', email='$email', celular='$celular' WHERE matricula = '$pesquisar'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("busca.php");
endif;

echo "$affected_rows";
?>