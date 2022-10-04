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

    function getBrandNameandId (){
        $query = $this->db->prepare("SELECT id_marca, nombre_marca FROM marca WHERE 1");
        $query->execute();
        $BrandNameandId = $query->fetchAll(PDO::FETCH_OBJ);
        return $BrandNameandId;
    }
    function GetAll () {
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();
        $brands = $query->fetchAll(PDO::FETCH_OBJ);
        return $brands;
    }

}