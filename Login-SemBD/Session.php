<?php

// Para trabalhar com sessões no PHP nós utilizamos 
# diversas funções.

session_start();


$_SESSION['nome'] = "Maria";
$_SESSION['idade'] = 23;

# As sessões são úteis para compartilhar informações 
# entre páginas diferentes.

echo "<h2>Sessão</h2>";
# Para podermos concatenar texto com conteúdo de 
# arrays associativos ou conteúdos de superGlobais 
# precisamos utilizar as chaves {}. Pois, são chamadas de string
# super complexas em PHP
echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos <br>";

# Uma função importante é o reconhecimento do ID da sessão.
echo "ID ". session_id();


//Criaremos outro programa chamado de "Teste.php
?>