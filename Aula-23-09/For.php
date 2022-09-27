<?php 
// Controle de fluxo (loops) - Laço    
# Permite executar um bloco de código em um determinado número de vezes; 
# Este "laço" constitui-se de 3 parâmetros
#
# 1 - Valor inicial númerico: utilizado para controlar o número de "loops"
# 2 - Condição: Avalia o contador para encerramento do "loop"
# 3 - Incremento ou Decremento: altera o valor do contador

# Exemplo 1  

for($x = 1; $x < 10; $x++){
    echo "Exemplo 1 - ". $x. "<br>";
}

echo "<hr>";

# Exemplo 2
for($x = 1; $x < 10; $x++)
    echo "Exemplo 2 - ". $x. "<br>";

echo "<hr>";


# Exemplo 3
$x=1;
for(; $x < 10; $x++){
    echo "Exemplo 3 - ". $x. "<br>";
}

echo "<hr>";

# Exemplo 4
$nomes=['Paulo', 'Maria', 'Ana'];
for($i = 0; $i < sizeof($nomes); $i++){
    echo "Exemplo 4 - Nome ". $nomes[$i]. "<br>";
}

echo "<hr>";

# Exemplo 5
for($controle = 1, $z = 20; $controle < 10; $controle++, $z--){
    echo "Variável C - ".$controle. "<br>";
    echo "Variável Z - ".$z. "<br>";
}
echo "<hr>";



?>