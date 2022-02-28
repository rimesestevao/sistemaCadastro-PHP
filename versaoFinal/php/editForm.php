<?php session_start();
$_SESSION["newsession"];
include 'conexao.php';
?>

<?php

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
        <form autocomplete="off" id="form" action="../php/index.php" method="get">
            <h2>
                Cadastro da providência
            </h2>

            <div class="form col-12">
                <input class="input" placeholder=" " required type="text" name="nome" id="nome" />
                <label for="nome" class="label">Nome</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " value="<?php echo"$cpf" ?>" required oninput="mascara(this, 'cpf')" maxlength="11" type="text"
                    name="cpf" id="cpf" />
                <label for="cpf" class="label">CPF</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " required oninput="mascara(this, 'rg')" type="text" name="rg"
                    id="rg" />
                <label for="rg" class="label">RG</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " required type="number" max="999" oninput="mascara(this, 'idade')"
                    name="idade" id="idade" />
                <label for="idade" class="label">Idade</label>
            </div>



            <div class="form">
                <input class="input" placeholder=" " required type="text" name="cidade" id="cidade" />
                <label for="cidade" class="label">Cidade</label>
            </div>


            <div class="form">
                <input class="input" placeholder=" " required type="text" name="endereco" id="endereco" />
                <label for="endereco" class="label">Endereço</label>
            </div>

            <div class="form">
                <input class="input" placeholder=" " required type="email" name="email" id="email" />
                <label for="email" class="label">E-mail</label>
            </div>


            <div class="form">
                <input class="input" required oninput="mascara(this, 'tel')" placeholder=" " type="tel" name="celular"
                    id="celular" />
                <label for="celular" class="label">Celular</label>
            </div>



            <div class="form custom-select">
                <select class="form-select" aria-label="sexo" required name="sexo" id="sexo">
                    <option value="">Escolha seu sexo</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outros">Outro</option>
                </select>
            </div>


            <a href="index.html" class="botaoOutline">Voltar</a>
            <button type="submit" class="botaoSolid">Enviar</button>

        </form>
    </div>

</body>

</html>