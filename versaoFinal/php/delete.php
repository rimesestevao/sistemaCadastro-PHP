<?php

include 'conexao.php';

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "Delete FROM matricula WHERE 'matricula'='$pesquisar'";
$result_usuario = mysqli_query($link, $result_usuario);

?>