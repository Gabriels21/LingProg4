<?php

// Operadores Lógicos
# Frequentemente são utilizados com os "Operadores de Comparação"
# Permitem 'ligar' várias comparações. Gerando uma proposisão.
# AND e OR
# $$  e ||


$a = 100;
$b = 200;

# Os valores de retorno em x são do tipo booleano FALSE ou TRUE.

echo $x = ($a < $b) && ($a < 1000); # AND -> TRUE
$x = (true && true);
echo '<br>';

echo $x = ($a > $b) || ($a > 1000); # OR -> FALSE
$x = (true && false);

echo $x = ($a < 150) && ($b > 300); # AND -> FALSE
$x = (true && false);

echo $x = ($a > 10) || ($b > 500); # OR -> TRUE
$x = (true && false);

echo $x = ($a == 100) && ($b < $a); # OR -> FALSE
$x = (true && false);

?>