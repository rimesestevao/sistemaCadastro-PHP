<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">

    <script src="script.js" defer></script>
</head>

<body>

    <form autocomplete="off" action="arquivo.php" method="GET">
        <h2>
            Cadastro da providência
        </h2>

        <div class="input">
            <input required type="text" name="nome" />
            <label>Nome</label>
            <span class="error"></span>
        </div>


        <div class="input">
            <input required type="text" name="cpf" />
            <label>CPF</label>
            <span class="error"></span>
        </div>


        <div class="input">
            <input required type="text" name="rg" />
            <label>RG</label>
            <span class="error"></span>
        </div>


        <div class="input">
            <input required type="number" name="idade" />
            <label>Idade</label>
            <span class="error"></span>
        </div>

        <div class="input">
            <input required type="text" name="cidade" />
            <label>Cidade</label>
        </div>


        <div class="input">
            <input required type="text" name="endereco" />
            <label>Endereço</label>
        </div>

        <div class="input">
            <input required type="email" name="email" />
            <label>E-mail</label>
            <span class="error"></span>
        </div>


        <div class="input">
            <input required type="tel" name="celular" />
            <label>Celular</label>
            <span class="error"></span>
        </div>


        <div class="custom-select">
            <select required>
              <option value="">Escolha seu sexo</option>
              <option value="1">Masculino</option>
              <option value="2">Feminino</option>
              <option value="3">Outro</option>
            </select>
        </div>


        <button type="button" class="btn btn-dark">Enviar</button>

    </form>
    <?php
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$email = isset($_GET["email"])?$_GET["email"]:["não informado"];
$sexo = $_GET["sexo"];;
$cpf = $_GET["cpf"];
$rg = $_GET["rg"];
$cel = $_GET["cel"];
$endereco = $_GET["endereco"];
$cidade = $_GET["cidade"];

if($rg != 9){ 
echo "rg inválido";
}


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
?>
</body>

</html>