
<?php

$gestor = new PDO("mysql:host=localhost;dbname=bancoteste;charset=utf8","root","");
# mysql:host = localhost;
# dbname = Base de dados;
# charset = opções não obrigatórias;
# utilizador = "root"
# $password  = null,
# $options = null,

# Uma variável para conter os dados da tabela (em um determinado formato)
$dados = $gestor->query("SELECT * FROM fornecedores");

# Um método FECTH do PDO de busca de todos os dados armazenados 
# ASSOC é um formato de Array associativo
$fornecedores = $dados->fetchAll(PDO::FETCH_ASSOC);

echo'<pre>';
print_r($fornecedores);

?>