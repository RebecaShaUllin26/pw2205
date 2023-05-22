<?php 
    $dataAt = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: grey;">
    <div class="container" style="background-color: white; padding: 0;">
    <header>
        <div class="row">
            <div class="col cabecalho">
            <nav class="navbar navbar-expand-lg  bg-lg  border-bottom shadow-sm mb-3" style="background-color: rgb(31, 87, 192);">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand cabecalho__titulo" href="index.php">LIÇÃO 22/05</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col formulario">
                    <form action="conexao.php" method="POST">
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email:</label>
                            <input type="Email" class="form-control" id="Email" name="Email" required>
                        </div>

                        <div class="mb-3">
                            <label for="Senha" class="form-label">Senha: </label>
                            <input type="text" class="form-control" id="Senha" name="Senha" required>
                        </div>

                         <div class=" mb-3 text-left ">
                     <input style="background-color: rgb(31, 87, 192);" type="submit" value="Cadastrar" class=" btn btn-lg btn-success ">
                        </div>
                    </form>
            </div>
            <div class="table-responsive">
               </div>
        </div>
    </div>
</body>

</html>