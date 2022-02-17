<h1>Pesquisar Matricula</h1>
<form method="POST" action="pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
</form>

<?php
    $servidor = "10.0.0.1/~riogamer";
    $usuario = "riogamer";
    $senha = "l1b3r4t0r24";
    $dbname = "riogamer";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM matricula WHERE matricula LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);

    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Numero da matricula: ".$rows_cursos['matricula']."<br>";
    }
?>