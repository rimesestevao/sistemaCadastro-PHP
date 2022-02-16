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

    <form autocomplete="off" action="index.php" method="GET">
        <h2>
            Cadastro da providência
        </h2>

        <div class="input">
            <input required type="text" name="nome" />
            <label>Nome</label>
        </div>


        <div class="input">
            <input required type="" name="cpf" />
            <label>CPF</label>
        </div>


        <div class="input">
            <input required type="text" name="rg" />
            <label>RG</label>
        </div>


        <div class="input">
            <input required type="number" name="idade" />
            <label>Idade</label>
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
        </div>


        <div class="input">
            <input required type="tel" pattern="{0-9}{2}-{0-9}{5}-{0-9}{4}" name="celular" />
            <label>Celular</label>
        </div>


        <div class="custom-select">
            <select required class="form-control" name="sexo">
              <option value="">Escolha seu sexo</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
              <option value="outro">Outro</option>
            </select>
        </div>


        <button type="submit" class="btn btn-dark">Enviar</button>

    </form>
</body>

</html>