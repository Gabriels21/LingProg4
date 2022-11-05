<?php

// Classes - CONSTRUCT  
#no exemplo anterior as propriedades já estavam predefinidas
# $codnome  = "Professora";
# A ideia é trabalhar com esta propriedades de forma dinâmica,
# para isto devemos utilizar o CONSTRUCT 

#Exemplo Anteriro
class Humano{
    # Propriedades 
    public $nome = 'Maria'; # public é um modificador acesso(visibilidade)
    public $codnome = 'Professora';

    #Métodos 
    public function nomeCompleto(){
        return $this->codnome . ' '. $this->nome;
        $nome = 'Teste';

    }

}

$homem = new Humano();
echo $homem -> nomeCompleto();
echo '<hr>';

//CONSTRUCT     
# É um método especial dentro de uma classe que é 
# executado automaticamente quando é criado um objeto 
# a partir da classe.
# Este método é definido de uma forma especial com dois
# "underscores".

class Humano2{
    private $nome;      # indica que estas são propriedades 
    private $codnome;   # são visíveis apenas pelos métodos
                        # (funções) dentro das classes
                        # os objetos não sabem, não conhecem 
                        # estas propriedades. Apenas conhecem 
                        # o método (a função) quando este for "public"

    # Esta função é executada de forma automática
    # quando se instancia um objeto desta classe
    function __construct($n, $c){
        $this->nome = $n; # this->nome vai receber o valor de $n
        $this->codnome = $c; # this->codnome vai receber o valor de $c
    }

    public function funCodNome(){
        return $this->nome . " " . $this->codnome;
    }
}

$homem = new Humano2('Marcos', 'Paulus');
# Ao criar o objeto "$homem" a função __construct é chamada 
# automaticamente com a passagem dos argumentos.
echo $homem -> funCodNome();
echo '<br>';

/*-------*/

$mulher = new Humano2('Mari', 'Agdalena');
echo $mulher -> funCodNome();

?>