<?php session_start();
$_SESSION["newsession"];
include 'conexao.php';

?>

<?php
    $pesquisar = $_POST['edit'];
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
    endwhile
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">

    <script src="../scripts/main.js" defer></script>
</head>

<body>
    <div class="container">
        <form autocomplete="off" id="form" action="edicao.php" method="post">
            <h2>
                Edite o seu cadastro.
            </h2>

            <div class="form col-12">
                <input class="input" value="<?php echo "$nome" ?>" placeholder=" " required type="text" name="nome" id="nome" />
                <label for="nome" class="label">Nome</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " value="<?php echo "$cpf" ?>" value="<?php echo"$cpf" ?>" required oninput="mascara(this, 'cpf')" maxlength="11" type="text"
                    name="cpf" id="cpf" />
                <label for="cpf" class="label">CPF</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " value="<?php echo "$rg" ?>" required oninput="mascara(this, 'rg')" type="text" name="rg"
                    id="rg" />
                <label for="rg" class="label">RG</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " value="<?php echo "$idade" ?>" required type="number" max="999" oninput="mascara(this, 'idade')"
                    name="idade" id="idade" />
                <label for="idade" class="label">Idade</label>
            </div>



            <div class="form">
                <input class="input" placeholder=" " value="<?php echo "$cidade" ?>" required type="text" name="cidade" id="cidade" />
                <label for="cidade" class="label">Cidade</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " value="<?php echo "$endereco" ?>" required type="text" name="endereco" id="endereco" />
                <label for="endereco" class="label">Endereço</label>
            </div>

            <div class="form">
                <input class="input" placeholder=" " value="<?php echo "$email" ?>" required type="email" name="email" id="email" />
                <label for="email" class="label">E-mail</label>
            </div>


            <div class="form">
                <input class="input" required oninput="mascara(this, 'tel')" placeholder=" " value="<?php echo "$celular" ?>" type="tel" name="celular"
                    id="celular" />
                <label for="celular" class="label">Celular</label>
            </div>



            <div class="form custom-select">
                <select class="form-select" value="<?php echo "$sexo" ?>" aria-label="sexo" required name="sexo" id="sexo">
                    <option value="">Escolha seu sexo</option>
                    <option value="masculino">masculino</option>
                    <option value="feminino">feminino</option>
                    <option value="outros">outro</option>
                </select>
            </div>


            <a href="index.html" class="botaoOutline">Cancelar</a>
            <button type="submit" class="botaoSolid">Concluir</button>

        </form>
    </div>
        <script>
        var text = '<?php echo "$sexo"?>';
        var select = document.querySelector('#sexo');
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].text === text) {
                select.selectedIndex = i;
                break;
            }
}</script>

<?php

$pesquisar = $_POST['edit'];

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_NUMBER_INT);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_NUMBER_INT);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate = $link->query("update matricula set nome=$nome idade=$idade cpf=$cpf rg=$rg sexo=$sexo cidade=$cidade endereco=$endereco email=$email celular=$celular where matricula = '$pesquisar'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("../busca.php");
    endif
?>

</body>
</html>