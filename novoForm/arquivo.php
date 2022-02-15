<?php

$host = "10.0.0.1/~riogamer";
$user ="riogamer";
$pass = "l1b3r4t0r24";
$banco = "riogamer";

$link = mysqli_connect($host,$user,$pass,$banco);
if(mysqli_connect_errno($link)){
    echo "erro de conexão";
}else{
    echo "conexão estabelecida";
}
?>