<?php

    class Db{
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'e_commerce';


        public function __construct() {
            try {
                // when the program succes
                $dsn = "mysql:host={$this->host};dbname={$this->database}";
                $option = array(PDO::ATTR_PERSISTENT);

                $this->db = new PDO($dsn,$this->username,$this->password, $option);


            }
            catch(Exception $e) {
                // if we face any errors
                echo "Connection Error: ", $e->getMessage();
            }

        }
    }

    // $obj = new Db();
    // var_dump($obj);



?>