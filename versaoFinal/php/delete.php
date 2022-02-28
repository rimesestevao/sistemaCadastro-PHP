<?php

include 'conexao.php';

$matricula = 3;
echo "$matricula";
$result_usuario = "Delete FROM matricula WHERE matricula='$matricula'";
$result_usuario = mysqli_query($link, $result_usuario);

?>