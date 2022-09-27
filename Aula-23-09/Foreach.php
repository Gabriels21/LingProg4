<?php

// Controle de Fluxo - FOREACH
# Permite executar um bloco de código a partir de valores de um "Array
# Notar a que não há a necessidade de iniciar uma variável,
# nem realizar o imcreemento ou decremento desta variável.
# Pois, o ciclo passa automaticamente de forma sequêncial,  em
# cada elemento do "array".
#
# Note tgambém, que cada elemento do "array" é carregado na variável
# Logo apóes a declaraçlão de "AS".

# Exemplo 1 
$nomes=["Mari","Ada", "Lena"];
foreach($nomes as $nome){
    echo $nome. "<br>";
}

echo "<hr>";

# Exemplo 2
$x = [1,2,3];
foreach($x as $y){
    echo $y. "<br>";
}

echo "<hr>";

# Exemplo 3
echo "# Exemplo 3 <br>";
# Existe uma assinatura diferente para o FOREACH
$EstadoCapital=['Acre' => 'Rio Branco',
'Amapa' => 'Macapa',
'Alagoas ' => 'Maceio',
'Ceara' => 'Forteleza'
];


foreach($EstadoCapital as $chave => $value){
    echo "Para o estado $chave a capital e $value <br>";
};

?>