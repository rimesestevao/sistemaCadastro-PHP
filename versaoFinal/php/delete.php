<?php

include 'conexao.php';

$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "Delete FROM matricula WHERE matricula='$nome'";
$result_usuario = mysqli_query($link, $result_usuario);

?>