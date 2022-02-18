<h1>Pesquisar Matricula</h1>
<form method="POST" action="pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
</form>

<?php
   include "conexao.php"

    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM matricula WHERE matricula LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);

    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Numero da matricula: ".$rows_cursos['matricula']."<br>";
    }
?>