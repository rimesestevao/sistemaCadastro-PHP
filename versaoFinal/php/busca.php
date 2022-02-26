<?php session_start();
$_SESSION["newsession"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">

    <script src="../scripts/main.js" defer></script>
    <script type="text/javascript" src="../node_modules/jquery/"></script>
</head>

<body>

    <div class="container">
        <h4>Digite a matrícula que deseja procurar</h4>
        <form autocomplete="off" action="busca.php" method="post">
            <input class="form-control me-2" type="search"  aria-label="Search" name="busca">
            <button type="submit" class="botaoSolid">Buscar</button>
        </form>
    </div>
    <div class="cardResultado mt-6">
        <?php
            include 'conexao.php';
            
            $pesquisar = $_POST['busca'];

            echo"<br>$pesquisar<br>";


            
            $querySelect = $link->query("select * from matricula where matricula = '$pesquisar'");

            while ($registro = $querySelect->fetch_assoc()):
                $matricula = $registro['matricula'];
                $nome = $registro['nome'];
                $idade = $registro['idade'];
                $cpf = $registro['cpf'];
                $rg = $registro['rg'];
                $sexo = $registro['sexo'];
                $cidade = $registro['cidade'];
                $endereco = $registro['endereco'];
                $email = $registro['email'];
                $celular = $_GET['celular'];

                echo"<tr>";
                echo"<td>$nome</td>";
                echo"<tr>";
            endwhile


        ?>
    </div>
</body>

</html>