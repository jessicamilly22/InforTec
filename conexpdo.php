<?php
$host = 'localhost';
$dbname = 'senac1';
$username = 'root';
$password = '';

//PDO
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'conctadeo com sucesso.';
} catch (PDOException $e){
    echo 'Erro na conexao com data base'. $e->getMessage();
}
?>