<?php

// Funções Anônimas
// Utilizando variáveis de espaço global

$x = 50;
$y = 30;

$varFun = function($z) use($x, $y){
    echo "$z * $x = " . $z * $x . "<br>";
    echo "$z * $y = " . $z * $y . "<br>";
    # Esta função demonstra o uso da visibilidade
    # uso de variáveis definidas externamente a função
};

echo $x . "<br>";
echo $y . "<br>";
$varFun(2);

?>