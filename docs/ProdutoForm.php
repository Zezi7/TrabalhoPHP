<?php
    
    include '../docs/dao/connectionFactory.php';
    include '../docs/dao/ProdutoDao.php';
    include '/model/Produto.php';
    include '../docs/view/produto.php';

    if(isset($_POST['nome']) and isset($_POST['valor']) and isset($_POST['descricao']) and isset($_POST['estoque'])){
        require_once 'ProdutoForm.php';
        $produto = new Produto;
        $produto->setNome($_POST['nome']);
        $produto->setValor($_POST['valor']);
        $produto->setValor($_POST['descricao']);
        $produto->setValor($_POST['estoque']);

        

    }else{
        echo "Não enviou todos os dados";
    }
?>