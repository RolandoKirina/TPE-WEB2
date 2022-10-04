<?php

 class chocolatemodel {

    private $db;

    private function connect () {
        $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
        return $db;
    }

    function __construct () {
        //cada vez que hay un metodo en la clase automaticamente se abre la conexion a la db
        $this->db =  $this->connect();
    }
    
    function getAll () {
        $query = $this->db->prepare("SELECT * FROM item");
        $query->execute();
        $items = $query->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }
    function deleteitem ($id){
        $query = $this->db->prepare("DELETE FROM item WHERE id_chocolate = ?");
        $query->execute([$id]);
    }
    function getItemById($id){
        $query = $this->db->prepare("SELECT nombre_chocolate, precio_unidad, descripcion, stock FROM item WHERE id_chocolate=?");
        $query->execute([$id]);
        $item = $query->fetchAll(PDO::FETCH_OBJ);
        return $item;
    }
    
    function insertData($namechocolate, $price, $description, $stock, $id_marca){
        $query = $this->db->prepare("INSERT INTO item (nombre_chocolate, precio_unidad, descripcion, stock, id_marca) VALUES (?,?,?,?,?)");
        $query->execute([$namechocolate, $price, $description, $stock, $id_marca]);
        
        return $this->db->lastInsertId();
    }
    function update($id, $names, $years, $countrys){
        $query = $this->db->prepare("UPDATE marca SET nombre_marca=?, anio_creacion=?,pais_marca=? WHERE id_marca=?");
        $query->execute([$id, $names, $years, $countrys]);
    }
 }


 