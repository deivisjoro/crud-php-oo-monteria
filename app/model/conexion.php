<?php

    include_once('app/config/database.php');
    class Conexion{

        private $driver;
        private $host;
        private $user;
        private $password;
        private $db;
        private $charset;

        public function __construct(){
            $this->driver    = constant('DRIVER');
            $this->host      = constant('HOST');
            $this->user      = constant('USERNAME');
            $this->password  = constant('PASSWORD');
            $this->db        = constant('DATABASE');
            $this->charset   = constant('CHARSET');
        }

        public function connect(){
            try{
                $connection = $this->driver.':host='.$this->host.';dbname='.$this->db.';charset='.$this->charset;
                $options    = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]; 

                $pdo = new PDO($connection, $this->user, $this->password, $options);
                return $pdo;
            }
            catch(PDOException $e){
                die("Error connection: ".$e->getMessage());
            }
        }

    }

?>