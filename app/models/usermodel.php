<?php

    class usermodel {
        private $db;


        private function connect () {
            $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
            return $db;
        }

        function __construct () {
            //cada vez que hay un metodo en la clase automaticamente se abre la conexion a la db
            $this->db =  $this->connect();
        }

        function getUser () {
            $query = $this->db->prepare("SELECT * FROM users WHERE user = ? ");
            $query->execute($user);
            $user = $query->fetchAll(PDO::FETCH_OBJ);
            return $user;
        }

        function adduser ($user, $password) {
            $query = $this->db->prepare("INSERT INTO users (user, password) VALUES (?, ?)");
            $query->execute([$user, $password]);

            return $this->db->lastInsertId();
        }


        


}
