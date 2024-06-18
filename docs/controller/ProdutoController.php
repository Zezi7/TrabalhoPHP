<?php
    include '../dao/connectionFactory.php'; //conexao com banco
    include '../dao/ProdutoDao.php'; //data acces object
    include '../model/Produto.php'; //Classe produto

    $produto = new Produto();
    $produtoDao = new ProdutoDao();

    //Pegar os dados enviados
    $dadosRequest = filter_input_array(INPUT_POST);

    //se a operacao for salvar
    if(isset($_POST['cadastrar'])){
        $produto->setNome($_POST['nome']);
        $produto->setValor($_POST['valor']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setEstoque($_POST['estoque']);
        $produtoDao->inserir($produto);
        header("location: ../view/produto.php");
    }elseif(isset($_GET['del'])){
        $produto->setId($_GET['del']);
        $produtoDao->delete($produto);
        header("location: ../view/produto.php");
    }


?>