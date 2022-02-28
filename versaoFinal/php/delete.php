<?php

include 'conexao.php';

$pesquisar = 1;
echo "$pesquisar";
$result_usuario = "Delete FROM matricula WHERE matricula='$pesquisar'";
$result_usuario = mysqli_query($link, $result_usuario);

?>