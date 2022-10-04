<?php

class homemodel {

    private $db;

    private function connect (){
        $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
        return $db;
    }
    function __construct () {
        //cada vez que hay un metodo en la clase automaticamente se abre la conexion a la db
        $this->db =  $this->connect();
    }

    function getAllItems (){
        $query = $this->db->prepare("SELECT * FROM item");
        $query->execute();
        $items = $query->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }

    function getBrandNameandId (){
        $query = $this->db->prepare("SELECT id_marca, nombre_marca FROM marca WHERE 1");
        $query->execute();
        $BrandNameandId = $query->fetchAll(PDO::FETCH_OBJ);
        return $BrandNameandId;
    }
}