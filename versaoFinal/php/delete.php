<?php

include 'conexao.php';

$matricula = $_POST['delete'];
echo "$matricula";
$result_usuario = "Delete FROM matricula WHERE matricula='$matricula'";
$result_usuario = mysqli_query($link, $result_usuario);
 
header('Location: ../pages/busca.html');

?>