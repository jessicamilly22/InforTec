<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'MEUBDNEW';


$conn = new PDO("mysql:host=$db_host", $db_username, $db_password);


$conn->exec("CREATE DATABASE IF NOT EXISTS $db_name");


$conn->exec("USE $db_name");
$conn->exec("CREATE TABLE IF NOT EXISTS MINHATABELA (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(50),
    LASTNAME VARCHAR(50),
    CPF VARCHAR(14),
    ENDEREÇO VARCHAR(100),
    CIDADE VARCHAR(50)
)");

$data = array(
    array('NOME' => 'Guilherme', 'LASTNAME' => 'Silva', 'CPF' => '12345678909', 'ENDEREÇO' => 'Rua 1', 'CIDADE' => 'São Paulo'),
    array('NOME' => 'Maria', 'LASTNAME' => 'Oliveira', 'CPF' => '98765432109', 'ENDEREÇO' => 'Rua 2', 'CIDADE' => 'Rio de Janeiro'),
    array('NOME' => 'Arthur', 'LASTNAME' => 'Santos', 'CPF' => '11122233309', 'ENDEREÇO' => 'Rua 3', 'CIDADE' => 'Brasília')
);

$stmt = $conn->prepare("INSERT INTO MINHATABELA (NOME, LASTNAME, CPF, ENDEREÇO, CIDADE) VALUES (:NOME, :LASTNAME, :CPF, :ENDEREÇO, :CIDADE)");
foreach ($data as $row) {
    $stmt->execute($row);
}

// Close connection
$conn = null;
?>