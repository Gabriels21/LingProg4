<?php 
// Controle de fluxo (loops) - WHILE    
# São utilizadas para controlar um código ou bloco de código
# repetidas vezes.
#
# Para este controle de fluxo (while) o código pode
# nunca ser executado, pois o teste lógico pode inibir a execução
# do código

# Exemplo  
$x=1;
while($x <10){
    echo "Exemplo 1";
    echo " Ciclo WHILE em excução ". $x;
    echo "<br>";
    $x++;
}

echo "<br>";

$x=1;
while($x <10){
    echo "Exemplo 2";
    echo " Ciclo WHILE em excução ". $x++. "<br>";
}

?>