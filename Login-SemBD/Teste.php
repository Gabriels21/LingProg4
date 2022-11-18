<?php

# O objetivo do teste é o de verificar que o conteúdo 
# criando na seção (no programa "Session.php") continua existindo
# e pode ser utilizado por outras páginas.

session_start();

echo "<h2> Teste de 'Session' </h2>";
echo "Nome: {$_SESSION['nome']},
Idade: {$_SESSION['idade']} <br>";

echo "ID ". session_id();

?>