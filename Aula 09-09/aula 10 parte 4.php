<?php

// Strings
# Comparação de "Strings"
# Funções nativas do PHP para manipulação de "strings"
# código em tempo de execução 

# Exemplo 1 - Comparação de "String"
$a = 'Jonatas';
$b = 'Dias';

$c = ($a == $b); # false (Comparador lógico ==)
$d = ($a != $b); # true (Comparador lógico !=)

# Exemplo 2 - Funções nativas"
$texto = 'Frase com x caracteres = 27';
$texto2 = 'FRASE COM X CARACTERES = 27';
# Retorna o número de caracteres
echo $num_caracteres = strlen($texto).'<br>';

# Retorna uma parte do texto a partir de uma 
# determinada posição
echo $paret_texto = substr($texto, 0, 4).'<br>';

# Converter letras para maíusculas
echo $texto_maiuscula = strtoupper($texto).'<br>';

# Converter letras para minusculas
echo $texto_minusculas = strtolower($texto2).'<br>';

#Substituir uma letra por outra
echo $subs_letra = str_replace('a', 'x', $texto).'<br>';

# Verifica qual a posição de um caractere
echo $posicao = strpos($texto, 'a');

?>