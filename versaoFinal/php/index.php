
<?php
        include "conexao.php";

        $sql = "SELECT * FROM matricula";
        if ($result=mysqli_query($link,$sql)) {
            $rowcount=mysqli_num_rows($result);
        }

        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $cpf = $_GET["cpf"];
        $rg = $_GET["rg"];
        $sexo = $_GET["sexo"];
        $cidade = $_GET["cidade"];
        $endereco = $_GET["endereco"];
        $email = isset($_GET["email"])?$_GET["email"]:["não informado"];
        $celular = $_GET["celular"];

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
            
            $queryInsert= $link ->query("insert into matricula values ('$matricula','$nome', '$idade', '$cpf', '$rg', '$sexo', '$cidade', '$endereco', '$email', '$celular')");
            
            if (mysqli_query($link, $sql)) {
                    echo " New record created successfully";
                    header("Location:../pages/index.html");
            } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            mysqli_close($link);


        }
        else{
            echo" o cpf $cpf não é válido";
        }
    ?>