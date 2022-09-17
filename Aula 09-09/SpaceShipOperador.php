<?php

// Um operador de comparação foi adicionado no PHP 
# chamado de "spaceship operator".
# É o "Tie Fighter" do "Stars Wars"
#
# <=>
# Esse operador retorna três valores possíveis
# [0, 1, -1]

echo $x = 1 <=> 1; # Retorna 0
# Indica que os valores da esquerda e da direita são iguais 
# Equivale a (1 == 1)

echo '<br>';

echo $x = 3 <=> 2; # Retorna 1
# Indica que os valores da esquerda é maior que o da direita
# Equivale a (3 > 2)

echo '<br>';

echo $x = 1 <=> 2; # Retorna -1
# Indica que os valores da esquerda é menor que o da direita
# Equivale a (1 < 2)

?>