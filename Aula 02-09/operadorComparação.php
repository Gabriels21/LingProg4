<?php


// Operadores de comparação entre valores 
# Permite a comparação entre valores 
# Verificam igualdade, diferença, maior, menor ou do mesmo tipo.
# O resultado da comparação será sempre um "booleano" False ou True"
//--------------

# Operador de Igualdade
## Observe a diferença entre um operador de "Atribuição" 
## e de "Comparação"

#Exemplo 1
$a = (2 == 3); #False

#Exemplo 2
$a = (100 == 100); #True

#Exemplo 3
$a = (50 == '50'); #True
# Neste caso ocorre uma verificação de igualdade,
# sem a verificação do tipo de variável.

#Exemplo 4
$a = (50 === '50'); #False
# Neste caso ocorre uma verificação de igualdade e, também, 
# do tipo de variável.

// Atenção
// Nós podemos verficar a existência dele.

# Neste exemplo não conseguimos visualizar o conteùdo da variável
$a = (2 == 3); #False
echo $a;
echo '<br>';

#Então, a solução é a de expressar a sua existência
if($a){
  echo "True";
} else {
  echo "False";
}

?>