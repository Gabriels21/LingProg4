<?php 

// Variáveis Continuação 3
// =======================

# Trabalhando com constantes
# São utilizadas com variáveis cujo conteudo não devem mudar.
# como padrão são definidas com letras maiusculas

echo "<p>Trabalhando com Constantes</p>";

// Exemplos
# Definindo uma variável constante de nome TAXA com 50%
define("TAXA", 0.5);

# Definindo outra variável constante de nome JUROS com 1%
define("JUROS", 0.01);

//Utilizar estas variáveis constantes
echo "Valor da taxa: " . TAXA . "% <br>";
echo "Valor do juros: " . JUROS . "% <br>";


?>