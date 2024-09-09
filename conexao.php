<?php
$servename= "localhost";
$username="root";
$password="";
$dbname="senac";

$con= mysqli_connect($servername, $username, $password, $dbname);

if (!$con){
    die("Erro na conexao:" . mysqli_connect_erro());
}
echo "Conectado com sucesso!";
?>