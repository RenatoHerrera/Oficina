<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$CPF = filter_input(INPUT_POST, 'CPF');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');

$sql = $pdo->prepare("INSERT INTO usuario (nome, CPF, email, Telefone) VALUES (:nome, :CPF, :email, :telefone)");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':CPF', $CPF);
$sql->bindValue(':email', $email);
$sql->bindValue(':telefone', $telefone);
$sql->execute();

header("Location: index.php");
