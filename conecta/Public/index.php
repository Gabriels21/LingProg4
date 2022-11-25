<?php
// Chamar o arquivo de variáveis
require_once'../config.php';

$gestor = new PDO(
    "mysql:host=" . MYSQL_HOST. ";" .
    "dbname=" . MYSQL_DATABASE. "; charset=utf8",
    MYSQL_USER,
    MYSQL_PASSWORD
);

$dados = $gestor->query("SELECT * FROM fornecedores");
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
    <h3>Fornecedores</h3>
    <div class="container-fluid">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($fornecedores as $fornec):?>
    <tr>
      <td><?= $fornec["codigo"]?></td>
      <td><?= $fornec["nome"]?></td>
      <td><?= $fornec["email"]?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<p>Total de fornecedores: <strong><?= count($fornecedores)?></strong></p>
</div>
</body>
</html>