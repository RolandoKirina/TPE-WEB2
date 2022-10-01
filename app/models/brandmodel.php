<?php

class brandmodel {

    private $db;

    private function connect (){
        $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
        return $db;
    }
    function __construct () {
        //cada vez que hay un metodo en la clase automaticamente se abre la conexion a la db
        $this->db =  $this->connect();
    }

    function getAll () {

        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();

        $brands = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $brands;
    }

    function insertData($name, $country, $year){
        $query = $this->db->prepare("INSERT INTO marca (nombre_marca, anio_creacion, pais_marca) VALUES (?, ?, ?)");
        $query->execute([$name, $country, $year]);
        return $this->db->lastInsertId();

    }

    function deletebrand ($id){
        $query = $this->db->prepare("DELETE FROM marca WHERE id_marca = ?");
        $query->execute([$id]);
    }

}