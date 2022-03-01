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
        <form autocomplete="off" action="busca.php" method="POST">
            <input class="form-control me-2" type="search"  aria-label="Search" name="busca">
            <button type="submit" class="botaoSolid">Buscar</button>
        </form>
    </div>
    <div class="cardResultado">
        <div class="float-lg-left">
            <?php
                include 'conexao.php';
                
                $pesquisar = $_POST['busca'];
                
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
                    $celular = $registro['celular'];

                    echo"<tr>";
                    echo"<td>$nome</td>";
                    echo"<tr>";
                endwhile


            ?>
        </div>
        <form class="d-none d-lg-block float-right autocomplete="off" method="POST" action="editForm.php">
            <button class="btnForm" type="submit" value="<?php echo "$pesquisar" ?>" name="edit"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" fill="white" height="24" viewBox="0 0 24 24" width="24"><rect fill="none" height="24" width="24"/><path d="M3,10h11v2H3V10z M3,8h11V6H3V8z M3,16h7v-2H3V16z M18.01,12.87l0.71-0.71c0.39-0.39,1.02-0.39,1.41,0l0.71,0.71 c0.39,0.39,0.39,1.02,0,1.41l-0.71,0.71L18.01,12.87z M17.3,13.58l-5.3,5.3V21h2.12l5.3-5.3L17.3,13.58z"/></svg></button>
        </form>
        <form class="d-none d-lg-block float-right autocomplete="off" method="POST" action="delete.php">
            <button class="btnForm" type="submit" value="<?php echo "$pesquisar" ?>" name="delete"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" fill="white" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
        </form>
    
    </div>
</body>

</html>