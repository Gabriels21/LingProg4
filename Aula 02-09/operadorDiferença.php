<?php

// Operadores de DIFERENÇA
// -----------------------

# Exemplo 1 
$a = (2 != 3); #True

# Exemplo 2 - Forma Alternativa da anterior.
# Porém, menos utilizada 
$a = (100 <> 100); #False

# Exemplo 3
$a = (50 != 50); #False

# Exemplo 4
$a = (50 != '50'); #False
## Neste caso, também é avaliado apenas o valor e não o
## tipo de variável.

# Exemplo 5
$a = (50 !== '50'); #True
## Neste caso são avaliados a igualdade e o tipo de variável.

// Os operadores com 3 simbolos, comparam valor e tipo.

#Então, a solução é a de expressar a sua existência
if($a){
    echo "True";
  } else {
    echo "False";
  }

?>