<!-- Configuração com banco de dados --> 
<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','tryhard');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        function connectDatabase(){
            try{
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.BASE, USER, PASS);
            } catch (PDOException $e){
                echo "Error!".$e-getMessage();
                die();
            }
        }
    }
?>