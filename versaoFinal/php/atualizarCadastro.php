<?php
session_start();
include "conexao.php";

$matricula = $_SESSION['matricula'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_NUMBER_INT);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_NUMBER_INT);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);

echo "$cpf";

$queryUpdate = $link->query("update matricula set nome=$nome idade=$idade cpf=$cpf rg=$rg sexo=$sexo cidade=$cidade endereco=$endereco email=$email celular=$celular where matricula = '$matricula'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("../busca.php");
    endif
?>