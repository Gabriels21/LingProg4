<?php

// Strings
# Concatenação de "Strings"
# É um processo de junção de "Strings" por meio de
# código em tempo de execução 
#
# Temos dois operadores de concatenação:
# . Concatena "Strings" na variável 
# .= Concatena "Strings" na variável 
#
# Podemos usar uma na outra, basta mannter um padrçao
# no código


# Exemplo 
$a = 'Patricia'.' Ribeiro '.' de '.' Alencar ';
$b = 'Alex'.' Shisip '.' Park ';

echo $a;

echo '<br>';

echo $b;

$x = 'Jonatas ';
$y = 'Dias';
echo '<br>';
echo $x.$y;
echo '<br>';

# Exemplo com ".="
$x .= " C. ";
echo '<br>';
echo $x.$y;

?>