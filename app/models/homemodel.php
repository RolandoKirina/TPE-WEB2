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
    function getbrandnameandid (){
        $query = $this->db->prepare("SELECT id_marca, nombre_marca FROM marca WHERE 1");
        $query->execute();
        $brandnameandid = $query->fetchAll(PDO::FETCH_OBJ);
        return $brandnameandid;
    }
    function getall () {
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();
        $brands = $query->fetchAll(PDO::FETCH_OBJ);
        return $brands;
    }
    function insertdata($namebrand, $year, $country){
        $query = $this->db->prepare("INSERT INTO marca (nombre_marca, anio_creacion, pais_marca) VALUES (?,?,?)");
        $query->execute([$namebrand, $year, $country]);
        return $this->db->lastinsertid();
    }
    function deletebrand ($id){
        $query = $this->db->prepare("DELETE FROM marca WHERE id_marca = ?");
        $query->execute([$id]);
    }
    function getbrandbyid($id){
        $query = $this->db->prepare("SELECT nombre_marca, anio_creacion, pais_marca FROM item WHERE id_marca=?");
        $query->execute([$id]);
        $brandform = $query->fetchAll(PDO::FETCH_OBJ);
        return $brandform;
    }
    function update ($name, $year, $country, $id) {
        var_dump($id);
        $query = $this->db->prepare("UPDATE marca SET nombre_marca=?, anio_creacion=?,pais_marca=? WHERE id_marca=?");
        $query->execute([$name, $year, $country, $id]);
    }

    function convertbrand () {
        $brands = $this->getAll();
        foreach ($brands as $brand) {
            $brandname = $brand->nombre_marca;
        }
        return $brandname;
    }
 
}