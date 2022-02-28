<?php

include 'conexao.php';

$matricula = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$result_usuario = "Delete FROM matricula WHERE 'nome'='$matricula'";
$result_usuario = mysqli_query($link, $result_usuario);

?>