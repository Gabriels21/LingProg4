<?php 
// Variáveis Continuação
//=======================

//variável do tipo String
$nome = "Manoel";
$aula = 'PHP';

//inteiro
$idade = 25;

//float
$peso = 70.8;
$altura = 1.85;

// Exemplo 1 - Utilizando as variáveis

echo "Utilizando as variáveis: ";
echo "<br><br>";
echo "Nome:  $nome <br>";
echo 'Idade:  $idade <br>';
echo 'Idade: '. $idade .'<br>';
echo "<br>";

// Exemplo 2 - Utilizando as variáveis

echo "<p>Meu nome é $nome, tenho $idade anos de idade.</p>";
echo "Minha altura e peso são $altura m, $peso kg";
echo "<br>";
echo "<br>";

//informações sobre as varivveis

echo "informações sobre variáveis: ";
echo "<br>";
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump($peso);

?>