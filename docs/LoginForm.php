<?php
    
    include 'dao/connectionFactory.php';
    include 'dao/LoginDao.php';
    include 'model/Login.php';
    include 'index.php';

    if(isset($_POST['nome']) and isset($_POST['senha'])){
        require_once 'model/Login.php';
        $login = new Login;
        $login->setNome($_POST['nome']);
        $login->setSenha($_POST['senha']);

        

    }else{
        echo "Não enviou todos os dados";
    }
?>