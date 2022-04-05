<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$Cpf = filter_input(INPUT_POST, 'CPF');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
//echo "$nome $Cpf $email $telefone";

$sql = $pdo->prepare("INSERT INTO usuarios (nome, Cpf, email, Telefone) VALUES (:nome, :Cpf, :email, :telefone)");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':Cpf', $Cpf);
$sql->bindValue(':email', $email);
$sql->bindValue(':telefone', $telefone);

//if($sql->execute()){}else{print_r($sql->errorInfo());}

$sql->execute();

header("Location: index.php");
