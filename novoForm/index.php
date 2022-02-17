<?php

include "conexao.php";

$result = $mysqli->query("SELECT Code, Name FROM Country ORDER BY Name");

/* Get the number of rows in the result set */
$row_cnt = $result->num_rows;

$matricula = $row_cnt + 1;
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$cpf = $_GET["cpf"];
$rg = $_GET["rg"];
$sexo = $_GET["sexo"];
$cidade = $_GET["cidade"];
$endereco = $_GET["endereco"];
$email = $_GET["email"];
$celular = $_GET["celular"];


$sql = "INSERT INTO matricula (matricula, nome, idade, cpf, rg, sexo, cidade, endereco, email, celular) VALUES ('$matricula','$nome', '$idade', '$cpf', '$rg', '$sexo', '$cidade', '$endereco', '$email', '$celular')";





if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>