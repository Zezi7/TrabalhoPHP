<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1>Login</h1>
            <form action="controller/LoginController.php" method="post">
                    <div class="col-md-12 p-2 mx-auto">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control " name="nome" type="text">
                    </div>
                    <div class="col-md-12 p-2 mx-auto">
                        <label class="form-label" for="senha">Senha</label>
                        <input class="form-control " name="senha" type="password">
                    </div>
                    <div class="col-md-12 mb-3 d-grid gap-2 d-md-flex justify-content-md-end ">
                            <a href="index.php"><button class="btn btn-outline-danger" name="cadastrar" type="submit">
                                Cadastrar
                            </button></a>
                            <button class="btn btn-outline-success" name="validar" type="submit">
                                Logar
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>