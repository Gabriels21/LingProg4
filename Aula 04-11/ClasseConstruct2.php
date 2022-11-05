<?php

// Classes 
# Detalhe
# Apenas para o caso de funções Construct sem parâmetros 
# podemos alterar a forma de instanciação do objeto

class Humano2{
    function __construct()
    {
        // código .....
    }
}
$homem = new Humano2; # Funciona sem parenteses quando a função
                      # construct não possuir parâmetros.
                      # Pode ou não possuir parenteses.

# ou

$mulher = new Humano2();
?>