<?php

include 'conexao.php';

$matricula = $_POST['busca'];
$result_usuario = "Delete FROM matricula WHERE matricula='$matricula'";
$result_usuario = mysqli_query($link, $result_usuario);

?>