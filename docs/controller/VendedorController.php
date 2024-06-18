<?php
    include '../dao/connectionFactory.php'; //conexao com banco
    include '../dao/VendedorDao.php'; //data acces object
    include '../model/Vendedor.php'; //Classe vendedor

    $vendedor = new Vendedor();
    $vendedorDao = new VendedorDao();

    //Pegar os dados enviados
    $dadosRequest = filter_input_array(INPUT_POST);

    //se a operacao for salvar
    if(isset($_POST['cadastrar'])){
        $vendedor->setNome($_POST['nome']);
        $vendedor->setEmail($_POST['email']);
        $vendedor->setEndereco($_POST['endereco']);
        $vendedor->setDocumento($_POST['documento']);
        $vendedorDao->inserir($vendedor);
        header("location: ../view/Vendedor.php");
    }elseif(isset($_GET['del'])){
        $vendedor->setId($_GET['del']);
        $vendedorDao->delete($vendedor);
        header("location: ../view/Vendedor.php");
    }


?>