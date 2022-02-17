<?php
include_once "conexao.php";


$queryMatricula = "SELECT COUNT(id) AS qntMatriculas FROM matriculas";
$resultMatriculas = $conn->prepare($queryMatricula);
$resultMatriculas->execute();

$rowMatricula = $resultMatriculas->fetch(PDO::FETCH_ASSOC);
echo"Quantidade de matriculas é: $rowMatricula['qntMatriculas']"





$nome = $_GET["nome"];
$idade = $_GET["idade"];
$cpf = $_GET["cpf"];
$rg = $_GET["rg"];
$sexo = $_GET["sexo"];
$cidade = $_GET["cidade"];
$endereco = $_GET["endereco"];
$email = $_GET["email"];
$celular = $_GET["celular"];


$sql = "INSERT INTO matricula (nome, idade, cpf, rg, sexo, cidade, endereco, email, celular) VALUES ('$nome', '$idade', '$cpf', '$rg', '$sexo', '$cidade', '$endereco', '$email', '$celular')";





if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>