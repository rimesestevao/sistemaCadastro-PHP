<?php

include 'conexao.php';

$matricula = $_GET['pesquisar'];
$result_usuario = "Delete FROM matricula WHERE matricula='$matricula'";
$result_usuario = mysqli_query($link, $result_usuario);

?>