<?php

// O processo de login vai exigir um BD com uma tabela para validação 
# Fazer conexão e consulta com o BD.

// Porém, neste primeiro momento vamos utilizar um conjunto de variáveis 
$email_bd = 'jose@fatec.sp.gov.br';
$senha_bd = 123;

# Verificar se a informação foi enviada do formulário de login

if(isset($_POST['bt_logar'])){
    # Se existe informações enviadas pelo formulário
    # para capturar estas informações

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo $email;

    # Verificar se os dados do formulário são iguais aos 
    # que estão cadastrado no BD

    if($email == $email_bd && $senha== $senha_bd){
        # O processo de Login neste ponto está valindo
        # significa encaminhar o usuário para uma página
        # restrita

        header('Locaton: pagRestrita.php');
    } else{
        # Significa falha de login
        echo "<p>E-mail e/ou senha incorreta!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="Login-SEmBD.php" method="POST">
        <label>
            E-mail: <input type="email" name="email">
        </label>

        <label>
            senha: <input type="password" name="senha">
        </label>
        <button type="submit" name="bt_logar">Logar</button>
    </form>
</body>
</html>