<?php 
// Controle de fluxo (loops) - DO WHILE    
# Diferentemente do controle de fluxo WHILE, o DO WHILE executa 
# o bloco de código e realiza o teste lógico depois.
#
# Para este controle de fluxo (while) o código pode
# nunca ser executado, pois o teste lógico pode inibir a execução
# do código

# Exemplo  
$x=1;
do
{
    echo "Exemplo 1";
    echo " Ciclo DO WHILE em excução ". $x++;
    echo "<br>";
}while($x <10);

echo "<hr>";

$x=1;
do
" Ciclo DO WHILE em excução ". $x++.  "<br>"; while ($x <10); 

?>