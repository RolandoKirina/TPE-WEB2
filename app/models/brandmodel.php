<?php

class Brandmodel {

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
    function delete ($id){
        $query = $this->db->prepare("DELETE FROM marca WHERE id_marca = ?");
        $query->execute([$id]);
    }
    function getbrandbyid($id){
        $query = $this->db->prepare("SELECT * FROM marca WHERE id_marca=?");
        $query->execute([$id]);
        $brandbyid = $query->fetch(PDO::FETCH_OBJ);
        return $brandbyid;
    }
    function update ($name, $year, $country, $id) { 
        $brandbyid = $this->getbrandbyid($id);
        $query = $this->db->prepare("UPDATE marca SET nombre_marca=?, anio_creacion=?,pais_marca=? WHERE id_marca=?");
        $result =  $query->execute([$name, $year, $country, $id]);
    }

 
}