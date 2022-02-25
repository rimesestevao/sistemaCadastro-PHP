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
</head>

<body>

    <div class="container">
        <h4>Digite a matrícula que deseja procurar</h4>
        <form autocomplete="off" action="busca.php" method="post">
            <input class="form-control" type="search"  aria-label="Search" name="busca">
            <button type="button" class="botaoSolid">Buscar</button>

        </form>
        <div class="cardResultado">
            <table class="striped" >
                <thead>
                    <tr>
                        <th>nome</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    include_once 'read.php';
                  ?>  
                </tbody>
        </div>
    </div>
</body>

</html>