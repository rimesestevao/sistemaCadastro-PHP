<?php
$servername = "127.0.0.1";
$database = "riogamer";
$username = "riogamer";
$password = "abelha2021";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO matricula (nome, idade, cpf, rg, sexo, cidade, endereço, email, celular) VALUES (nome, idade, cpf, rg, sexo, cidade, endereço, email, celular)";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>