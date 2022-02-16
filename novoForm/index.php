<?php
$servername = "127.0.0.1";
$database = "riogamer";
$username = "riogamer";
$password = "abelha2021";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
      $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
      echo "Connected successfully";
    } catch (PDOException $error) {
      echo 'Connection error: ' . $error->getMessage();
    }

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$cpf = $_GET["cpf"];
$rg = $_GET["rg"];
$sexo = $_GET["sexo"];
$cidade = $_GET["cidade"];
$endereco = $_GET["endereco"];
$email = $_GET["email"];
$celular = $_GET["celular"];

$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO matricula (nome, idade, cpf, rg, sexo, cidade, endereço, email, celular) VALUES (:nome, :idade, :cpf, :rg, :sexo, :cidade, :endereço, :email, :celular)");

$my_Insert_Statement->bindParam(':nome', $nome);
$my_Insert_Statement->bindParam(':idade', $idade);
$my_Insert_Statement->bindParam(':cpf', $cpf);
$my_Insert_Statement->bindParam(':rg', $rg);
$my_Insert_Statement->bindParam(':sexo', $sexo);
$my_Insert_Statement->bindParam(':cidade', $cidade);
$my_Insert_Statement->bindParam(':endereço', $endereco);
$my_Insert_Statement->bindParam(':email', $email);
$my_Insert_Statement->bindParam(':celular', $celular);

if ($my_Insert_Statement->execute()) {
      echo "New record created successfully";
    } else {
      echo "Unable to create record";
    }

?>