<?php
# Definimos variáveis constatntes conforme solicitado na documentação /**
# php.net pesquisar: pdo e procura PDO::construct
$gestor = new PDO("mysql:host=localhost;dbname=bancoteste;charset=utf8","root","");
$dados = $gestor->query("SELECT * FROM fornecedores");
$fornecedores = $dados->fetchAll(PDO::FETCH_ASSOC);

define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'bancoteste');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
?>