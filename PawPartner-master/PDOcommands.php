<?php

//Conectar ao Banco de Dados
$dsn = "mysql:host=localhost;dbname=pawpartner";
$username = "pawpartner";
$password = "amd123";
$pdo = new PDO($dsn, $username, $password);

//Pesquisas
$stmt = $pdo->query("SELECT * FROM usuario");
while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $usuario['nome'] . " - " . $usuario['email'] . "<br>";
}

$stmt = $pdo->query("SELECT * FROM instituicao");
while ($instituicao = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $instituicao['nome'] . " - " . $instituicao['email'] . "<br>";
}

$stmt = $pdo->query("SELECT * FROM animal");
while ($animal = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $animal['nome'] . " - " . $animal['email'] . "<br>";
}

//Adicionar ao banco de dados
$id = 1;
$stmt = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

?>