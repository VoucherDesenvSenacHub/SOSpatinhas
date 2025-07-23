<?php
     define('HOST','localhost');
     define('DATABASE','SOS_Patinhas');
     define('USER','root');
     define('PASSWORD','');
 
     class Connect{
         protected $connection;
 
         function __construct(){
             $this->connectDatabase();
         }
 
         function connectDatabase(){
             try{
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
             }
             catch(PDOException $e){
                echo "Error!: ".$e->getMessage();
                die();
             }
         }
 
         public function getConnection() {
             return $this->connection;
         }
     }

    //  agora com o require_once no arquivo desejado, coloque após definir o nome da classe 'extends Connect'
    // e na hora de preparar uma query use '$stmt = $this->connection->prepare' e dps '$stmt->execute' pronto! para saber mais procure funções do PDO
?>