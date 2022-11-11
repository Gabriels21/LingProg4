<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Método POST (Pesquisa)</title>
</head>

<body>
    <?php require_once "menu.php" ?>
    <div class="container-fluid col-sm-4">
        <form action="4-Post_Busca.php" method="POST">
            <div class="mb-2">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>

</html>