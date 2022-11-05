<?php

// Classes somente com propriedades
# Sem qualquer tipo de métodos

// Classes somente com métodos
# Sem qualquer tipo de propriedades

#Exemplo 1
class Pessoa1{
# Classe apenas com propriedades

public $nome;
public $codnome;
}

# Exemplo 2 
class Pessoa2{
    # Classe apenas com Métodos 

    public function msg(Pessoa1 $humano1){
        // Método acessível fora da classe
        echo $humano1->nome. " " .$humano1->codnome;
    }

    private function andar(){
        // Método acessível apenas dentro da classe
        # Os objetos não tem visibilidade deste método
        
    }

    public function movimento(){
        $this->andar();
    }
}

// A classe "Pessoa1" permite o acesso de suas propriedades 
// Pois, o modificador de acesso é "Public"
$humano1 = new Pessoa1();
$humano1->nome="João";
$humano1->codnome="Assesor";

$humano2 = new Pessoa2();
$humano2->movimento();
$humano2->msg($humano1);


?>