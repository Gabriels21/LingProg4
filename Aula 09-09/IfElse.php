<?php

// Declarações / Instruções Condicionais 

# São instruções de controle de fluxo do programa de acordo
# com uma condição lógica.
# Estas condições lógicas são construídas utilizando-se de
# "operadores de comparação" associados com "operadores lógicos"

# O PHP possui várias estruturas condicionais para permitir este 
#controle.

// Declaração IF com "Operadores de Comparação"
# Define um bloco de código que são executadas se a condição lógica
# testada for verdadeira

# Exemplo 1- Teste com variável STRING. Apenas SE (IF)
$nome = 'jogo';
if($nome == 'jogo'){
  echo '<br>';
  echo '# --- Exemplo 1 - Teste com variável "STRING"';
  echo '<br>';
  echo 'Este teste será apresentado apenas se a';
  echo '<br>';
  echo 'condição lógica testada entre parenteses for';
  echo '<br>';
  echo 'verdadeira. Significa que este bloco de código';
  echo '<br>';
  echo 'entre chaves será executado';
  echo '<br>';
}

# Exemplo 2- Teste com variável NÚMERICA. Apenas SE (IF).....SENÃO (ELSE)
# O teste pode ser realizado com outros tipo de variáveis e, 
# também, possui código de execução para o caso do teste lógico 
# não verdadeiro
$idade = 19;
if($idade  <= 18){
  echo '<br>';
  echo '# --- Exemplo 2 - Teste com variável "NÚMERICA e um bloco IF executado"';
  echo '<br>';
  echo 'Considerando que o valor da variável é menor ou igual  do que 18';
  echo '<br>';
  echo 'igual a 18, para que este texto seja aprsentado.';
  echo '<br>';
} else{
    echo '<br>';
    echo '# --- Exemplo 2 - Teste com variável "NÚMERICA e um bloco ELSE executado"';
    echo '<br>';
    echo 'Considerando que o valor da variável é menor ou igual do que 18';
    echo '<br>';
  }

# Exemplo 3- Teste com variável NÚMERICA. Apenas SE....SENÃOSE....ENTÃO 
#                                                IF....ELSEIF....ELSE
# O teste lógico pode fazer mais de uma verificação de VERDADEIRO


$media = 8;

if($media <= 3){
  echo '<br>';
  echo 'Exemplo 3 - Nota menor ou igual a 3';
  echo '<br>';
  echo 'REPROVADO';
  echo '<br>';
} else if($media <= 6){
    echo '<br>';
    echo 'Exemplo 3 - Nota menor ou igual a 6';
    echo '<br>';
    echo 'EXAME';
    echo '<br>';
  } else if($media <= 7){
    echo '<br>';
    echo 'Exemplo 3 - Nota menor ou igual a 7';
    echo '<br>';
    echo 'RECUPERAÇÃO';
    echo '<br>';
  } else{
        echo '<br>';
        echo 'Exemplo 3 - Nota maior que 7';
        echo '<br>';
        echo 'APROVADO';
        echo '<br>';
  }

  echo '<br>';

# Exemplo 4 - Podemos deixar de utilizar as chaves, apenas se 
# existir uma única instrução no bloco de código

$nota = 8;

if($nota <= 3)
  echo 'Exemplo 4 - Sem uso de "chaves" no bloco de construção de código IF';
else if($nota <= 6)
  echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código ELSE IF 1';
else if($nota <= 7)
  echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código ELSE IF 2';
else
  echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código ELSE';
?>