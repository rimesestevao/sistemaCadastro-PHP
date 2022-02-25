<?php

include "conexao.php";

$sql = "SELECT * FROM matricula";
if ($result=mysqli_query($link,$sql)) {
    $rowcount=mysqli_num_rows($result);
}

$matricula = $rowcount + 1;
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'enereco', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);

function validaCPF($cpf) {
      
      $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
      
      if (strlen($cpf) != 11) {
            return false;
      }
      
      if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
      }
      
      for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                  $d += $cpf[$c] * (($t + 1) - $c);
                  }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                  return false;
            }
      }
      return true;
}






if( validaCPF($cpf) ){
      
      $sql = "INSERT INTO matricula (matricula, nome, idade, cpf, rg, sexo, cidade, endereco, email, celular) VALUES ('$matricula','$nome', '$idade', '$cpf', '$rg', '$sexo', '$cidade', '$endereco', '$email', '$celular')";

      if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
      }
      mysqli_close($link);

}
else{
      echo"o cpf $cpf não é válido";
}
?>