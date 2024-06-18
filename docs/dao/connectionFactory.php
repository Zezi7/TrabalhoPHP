<?php
    class connectionFactory{
        static $connection;

        public static function getConnection(){
            if(!isset($connection)){
                $host = "localhost";
                $dbName = "trabalhophp";
                $userDb = "root";
                $pass = "";
                $port = "3306";
                try{
                    $connection = new PDO("mysql:host=$host;dbname=$dbName;port=$port",$userDb,$pass);
                    echo "Conectado";
                    return $connection;
                }catch(PDOException $ex){
                    echo "Erro! ".$ex->getMessage();
                }
            }
            return $connection;
        }
    }
?>