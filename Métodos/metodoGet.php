<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Método GET(Pesquisa)</title>
</head>

<body>
<?php require_once "menu.php" ?>
    <div class="container-fluid col-sm-4">
        <form action="2-Get_Busca.php" method="GET">
            <div class="mb-2">
                <label class="form-label">Pesquisar Produto</label>
                <input type="text" class="form-control" name="palavra">             
            </div>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
    </div>

</body>

</html>