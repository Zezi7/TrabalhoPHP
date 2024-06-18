<?php
    include '../dao/connectionFactory.php';
    include '../dao/VendedorDao.php';
    include '../model/Vendedor.php';
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Vendedor</title>
</head>
<body>
    <div class="container-fluid">
        <?php
        include 'viewNavbar.php';
        ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 mt-3 ">
                <h3 class="text-center">Cadastro Vendedor</h3>
                <form action="../controller/VendedorController.php" method="post">
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="nome">Nome:</label>
                        <input class="form-control " name="nome" type="text" required>
                    </div>
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="email">e-mail:</label>
                        <input class="form-control " name="email" type="text" type="mail">
                    </div>
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="endereco">Endereço:</label>
                        <input class="form-control " name="endereco" type="text">
                    </div>
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="documento">Documento:</label>
                        <input class="form-control " name="documento" type="text" required>
                    </div>
                    <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>