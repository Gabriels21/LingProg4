<?php 

// Formatação de variáveis numericas
// Utilizando numberFormat()

echo "Formatação de variáveis numericas <br>";
echo "<br>";

# Definindo as variáveis
$val = 75.5; //float

// Apresentando SEM formatação
echo "Apresentando a variável sem a formatação <br>";
echo "Valor da variável: $val ";
echo "<br>";

# Apresentando o tipo de variável
echo "Apresentando o tipo de variável: ";
var_dump($val);

// Apresentando COM formatação
echo " <br><br> Apresentando a variável com a formatação <br>";
$valFormat = number_format($val, 2, ",", ".");
echo "Valor da variável formatada: $valFormat ";
echo "<br>";
# Apresentando o tipo de variável
echo "Apresentando o tipo de variável: ";
echo var_dump($valFormat);
?>