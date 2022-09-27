<?php 
// Exercício - TABUADA (1 ao 10)

# Realizar uma tabuada

# Use os controles de fluxo:
# a) For 
# b) While
# c) Do While 

echo "<h1>Tabuada com FOR</h1>";
for($x = 1; $x <= 10; $x++){
    echo "Tabuada do ".$x. "<br>";
    for($x2 = 1; $x2 <= 10; $x2++){
    echo $x." * ".$x2. " = ".$x*$x2. "<br>";
    }
    echo "<br>";
}
echo "<hr>";

echo "<h1>Tabuada com WHILE</h1>";
$n = 1;
while($n <= 10){
    echo "Tabuada do ".$n. "<br>";
    $n2=1;
    while($n2 <= 10){
        echo $n." * ".$n2. " = ".$n*$n2. "<br>";
        $n2++;
    }
    echo "<br>";
    $n++;
}

echo "<hr>";

echo "<h1>Tabuada com DO WHILE</h1>";
$t = 1;
do
{
    echo "Tabuada do ".$t. "<br>";
    $t2 = 1;
    do{
        echo $t." * ".$t2. " = ".$t*$t2. "<br>";
        $t2++;
    }while($t2 <= 10);
        echo "<br>";
        $t++; 
}while($t <= 10);


?>