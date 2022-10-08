<?php

// Classes - Introdução 
// Uma classe é definida em PHP pela declaração "class"
// seguido do nome da classe. Também, possui chaves....

// Por convenção do PSR-1 (define os padrões básicos de codificação do PHP)
// o nome de uma classe deve ser: StudlyCaps, PascalCase, MixedCase.
// https://www.php-fig.org/psr/psr-1/

# Exemplo 1 - Definição de classe 
    class AnimalMamifero{ # Utilizando padrão com: primeira letra Capital
    // Defini-se as propriedades e métodos nesta seção.
    # Propriedades: são variáveis em PHP que armazenam as características do objeto.
    #       características do objeto.
    #       São conhecidas como "Fields" (campos) ou atributos 
    #       de uma classe. Precisam ter uma definição de acesso (visibildade) específico (públicas, reservadas, etc.)

    # Métodos: são funções que definem o que o objeto pode fazer.

    }  

# Exemplo 2

    class FiguraGeometrica{
        # Definindo as Propriedades 
        public $largura, $comprimento;
        public $x;
        public $y;

        # Definindo um método
        function CalcArea($a, $b){
            return $a * $b;
        }
    }


?>