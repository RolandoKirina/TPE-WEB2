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
    function insertData($namechocolate, $price, $description, $stock, $id_marca){
        var_dump($namechocolate, $price, $description, $stock, $id_marca);
        $query = $this->db->prepare("INSERT INTO item (nombre_chocolate, precio_unidad, descripcion, stock, id_marca) VALUES (?,?,?,?,?)");
       
        $query->execute([$namechocolate, $price, $description, $stock, $id_marca]);
        
        return $this->db->lastInsertId();
    }
    
   /* function deletebrand ($id){
        $query = $this->db->prepare("DELETE FROM marca WHERE id_marca = ?");
        $query->execute([$id]);
    }*/
       /*function update($id, $names, $years, $countrys){
        $query = $this->db->prepare("UPDATE marca SET nombre_marca=?, anio_creacion=?,pais_marca=? WHERE id_marca=?");
        $query->execute([$id, $names, $years, $countrys]);
    }*/

    /*function getDetail($id){
        $query = $this->db->prepare("SELECT nombre_chocolate, precio_unidad, descripcion, stock FROM item WHERE id_chocolate=?");
        $query->execute([$id]);
    }*/
 }


 