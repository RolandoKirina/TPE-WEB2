<?php

    class Usermodel {
        
        private $db;

        private function connect () {
            $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
            return $db;
        }

        function __construct () {
            //cada vez que hay un metodo en la clase automaticamente se abre la conexion a la db
            $this->db =  $this->connect();
        }

        public function getuserbyemail($email) {
            $query = $this->db->prepare("SELECT * FROM users WHERE email = ?");
            $query->execute([$email]);
            $email = $query->fetch(PDO::FETCH_OBJ);
            return $email;
    
        }
    
}
 



