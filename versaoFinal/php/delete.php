<?php

include 'conexao.php';
include_once 'busca.php';

//$pesquisar = $_REQUEST['pesquisar'];
echo "$pesquisar";
$result_usuario = "Delete FROM matricula WHERE matricula='$pesquisar'";
$result_usuario = mysqli_query($link, $result_usuario);

?>