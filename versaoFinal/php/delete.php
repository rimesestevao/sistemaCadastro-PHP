<?php

include 'conexao.php';

$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$queryDelete = $link->query("delete from matricula where matricula='$matricula'");

if(mysqli_affected_rows($link) > 0):
    header("busca.php");

endif;
?>