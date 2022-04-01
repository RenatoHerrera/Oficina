<?php

$pdo = new PDO("mysql:dbname=po_cadastro;host=localhost:3306","root","");

$sql = $pdo->query('SELECT * from usuarios');

$dados = $sql->fetchAll();

print_r($dados);