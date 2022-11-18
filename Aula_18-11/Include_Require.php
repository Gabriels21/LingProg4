<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'cabecalho.php';
        # require 'cabecalho.php';

        // Caso o programa chamado no "include" não seja encontrado
        // o PHP gera uma mensagem de aviso "Warning" e continua.
        // Porém, para as situações em que o programa é exigido,
        // deve-se utilizar o "require". Neste caso, quando o programa 
        // requirido não for encontrado, o PHP gera um erro FATAL e para o programa
    ?>

    <?php echo "Código Principal - Teste de inclusão de código com INCLUDE";
          echo "<br>";?>
    

    <?php
        require_once 'rodape.php';
        # include 'rodape.php';

        // Para situações em que o mesmo programa seja incluido, utilizando
        // "include" ou "require", em pontos diferentes do programa, o PHP
        // gera um erro FATAL. Então, é melhor utilizar a extensão 
        // _once.
      
    ?>

</body>
</html>