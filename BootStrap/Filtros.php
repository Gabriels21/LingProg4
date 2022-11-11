<?php

/* Validação dos campos com SANITIZE. significa a lempeza dos dados*/

if(isset($_POST['bt_enviar'])){
    $nome = $_POST['nome'];
    # Habilita apenas para mostrar que o botão aparece na tela
    // Escapa de todos códigos Html e corrige espaços em branco entre os nomes 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome."<br>";

    $idade = $_POST['idade'];
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    echo $idade."<br>";

    $email = $_POST['email'];
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // teste deve ser espaços no e-mail
    echo $email."<br>";  

   
    $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    echo $peso. "<br>";
    var_dump($_POST);  
}

?>