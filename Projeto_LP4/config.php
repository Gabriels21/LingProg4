<?php
# Definimos variáveis constatntes conforme solicitado na documentação /**
# php.net pesquisar: pdo e procura PDO::construct
$gestor = new PDO("mysql:host=localhost;dbname=bancotarefa;charset=utf8","root","");
$dados = $gestor->query("SELECT * FROM camisas");
$fornecedores = $dados->fetchAll(PDO::FETCH_ASSOC);

define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'bancotarefa');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
?>