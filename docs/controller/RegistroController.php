<?php
    include '../dao/connectionFactory.php'; //conexao com banco
    include '../dao/RegistroDao.php'; //data acces object
    include '../model/Registro.php'; //Classe registro
    require_once '../model/Registro.php';
    require_once '../model/Produto.php';
    require_once '../model/Vendedor.php';

    $registro = new Registro();
    $registroDao = new RegistroDao();

    //Pegar os dados enviados
    $dadosRequest = filter_input_array(INPUT_POST);

    //se a operacao for confirmar
    if(isset($_POST['confirmar'])){
        $registro->setVendedorId($_POST['vendedorId']);
        $registro->setProdutoId($_POST['produtoId']);
        $registroDao->inserir($registro);
        header("location: ../view/registro.php");
    }elseif(isset($_GET['del'])){
        $registro->setId($_GET['del']);
        $registroDao->delete($registro);
        header("location: ../view/registro.php");
    }


?>