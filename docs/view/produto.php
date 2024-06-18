<?php
    include '../dao/connectionFactory.php';
    include '../dao/ProdutoDao.php';
    include '../model/Produto.php';
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Produto</title>
</head>
<body>
<div class="container-fluid">
        <?php
            include 'viewNavbar.php';
        ?>
</div>
<div class="col-md-10 p-5">
                <h3 class="text-center">Cadastro de produto</h3>
                <div class="bg-light p-5">
                    <form action="../controller/ProdutoController.php" method="post">
                    <div class="mb-3">
                            <label class="form-label" for="nome">Nome do produto</label>
                            <input class="form-control" name="nome" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="valor">Valor</label>
                            <input class="form-control" name="valor" type="number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="descricao">Descrição</label>
                            <textarea id="descricao" name="descricao" class="form-control" required>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="estoque">Estoque</label>
                            <input class="form-control" name="estoque" type="number">
                        </div>
                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <button name="cadastrar" class="btn btn-outline-success" type="submit">
                                Salvar
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
                            <th scope="col">Nome</th>
                            <th scope="col">valor</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Estoque</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $produtoDao = new ProdutoDao();
                            foreach($produtoDao->read() as $pro) : 
                        ?>
                        <tr>
                            <td><?= $pro->getId()?></td>
                            <td><?= $pro->getNome()?></td>
                            <td><?= $pro->getValor()?></td>
                            <td><?= $pro->getDescricao()?></td>
                            <td><?= $pro->getEstoque()?></td>
                            <td>
                                <a href="../controller/ProdutoController.php?del=<?= $pro->getId() ?>"><button class="btn btn-danger btn-sm" name="del" type="button">Excluir</button></a>
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