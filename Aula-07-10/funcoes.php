<?php

// Funções Anônimas
// São funções sem uma nomeação. Surgiram a partir da versão 5 >
// do PHP.
// As funções (métodos) precisam ter um ponto e vírgula no final das chaves.

# Exemplo 1
$x = function(){
    echo "Exemplo1 de função anônima";
};


# Forma de chamar a função requer o uso de uma variável.
$x();
# Observe que a variável $x funciona como o meio de chamada da função

# Exemplo 2

$msg = function($texto){
    echo "<br>";
    echo "Exemplo 2 - A mensagem de parâmetro é $texto" . "<br>";
};
$msg('Teste');

# Exemplo 3
$msg2 = function ($parl){
    echo "Parâmetro recebido na função: " . $parl . "<br>";
    return "Retorna parametro recebido";
};

echo "Exemplo 3 - Função anônima";
echo $msg2(155);


?>