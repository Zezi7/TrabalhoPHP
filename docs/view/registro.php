<?php
    include '../dao/connectionFactory.php';
    include '../dao/RegistroDao.php';
    include '../model/Registro.php';
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
<div class="container-fluid">
        <?php
            include 'viewNavbar.php';
        ?>
</div>
<div class="col-md-10 p-5">
                <h3 class="text-center">Registro de Venda</h3>
                <div class="bg-light p-5">
                    <form action="../controller/RegistroController.php" method="post">
                    <div class="mb-3">
                            <label class="form-label" for="vendedorId">ID do vendedor:</label>
                            <input class="form-control" name="vendedorId" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="produtoId">ID do produto:</label>
                            <input class="form-control" name="produtoId" type="text">
                        </div>
                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <button name="confirmar" class="btn btn-outline-success" type="submit">
                                Confirmar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome do Vendedor</th>
                            <th scope="col">Nome do Produto</th>
                            <th scope="col">valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $registroDao = new RegistroDao();
                            foreach($registroDao->read() as $re) : 
                        ?>
                        <tr>
                            <td><?= $re->getId()?></td>
                            <td><?= $re->getNomeVendedor()?></td>
                            <td><?= $re->getNomeProduto()?></td>
                            <td><?= $re->getValor()?></td>
                            <td>
                                <a href="../controller/RegistroController.php?del=<?= $re->getId() ?>"><button class="btn btn-danger btn-sm" name="del" type="button">Excluir</button></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>