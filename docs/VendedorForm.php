<?php
    
    include '../docs/dao/connectionFactory.php';
    include '../docs/dao/VendedorDao.php';
    include '/model/Vendedor.php';
    include '../docs/view/Vendedor.php';

    if(isset($_POST['nome']) and isset($_POST['documento'])){
        require_once 'model/Vendedor.php';
        $vendedor = new Vendedor;
        $vendedor->setNome($_POST['nome']);
        $vendedor->setEndereco($_POST['endereco']);
        $vendedor->setDocumento($_POST['documento']);

        

    }else{
        echo "Não enviou todos os dados";
    }
?>