<?php
// Chamar o arquivo de variáveis
require_once '../config.php';

$gestor = new PDO(
  "mysql:host=" . MYSQL_HOST . ";" .
    "dbname=" . MYSQL_DATABASE . "; charset=utf8",
  MYSQL_USER,
  MYSQL_PASSWORD
);

$dados = $gestor->query("SELECT * FROM camisas");
$fornecedores = $dados->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <!--Formulário de cadastro das camisas-->

  <div class="container-fluid">
  <form method="POST">
    <div class="input-group mb-3">
      Nome da Camisa: <input type="text" name="nome">
    </div>
    <div class="input-group mb-3">
      Valor da Camisa R$: <input type="number" name="valor">
    </div>
    <div class="input-group mb-3">
      Imagem da Camisa: <input type="file" name="foto">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>

  </div>

</body>

</html>