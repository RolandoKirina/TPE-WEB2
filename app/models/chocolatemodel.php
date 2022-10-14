<?php

 class Chocolatemodel {

    private $db;

    private function connect () {
        $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
        return $db;
    }

    function __construct () {
        //cada vez que hay un metodo en la clase automaticamente se abre la conexion a la db
        $this->db =  $this->connect();
    }
    
    function getall () {
        $query = $this->db->prepare("SELECT * FROM item");
        $query->execute();
        $items = $query->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }
    
    function delete ($id) { 
        $query = $this->db->prepare("DELETE FROM item WHERE id_chocolate = ?");
        $query->execute([$id]);
    }
    
    function getitembyid($id){
        $query = $this->db->prepare("SELECT * FROM item WHERE id_chocolate=?");
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }
    function getitemdetail($id){
        $query = $this->db->prepare("SELECT nombre_chocolate, precio_unidad, descripcion, stock  FROM item WHERE id_chocolate=?");
        $query->execute([$id]);
        $item = $query->fetch(PDO::FETCH_OBJ);
        return $item;
    }

    function insertdata($namechocolate, $price, $description, $stock, $id_marca){
        $query = $this->db->prepare("INSERT INTO item (nombre_chocolate, precio_unidad, descripcion, stock, id_marca) VALUES (?,?,?,?,?)");
        $query->execute([$namechocolate, $price, $description, $stock, $id_marca]);
        return $this->db->lastinsertid();
    }
   
    function update($chocolate, $price, $description, $stock, $marca, $id){
        $itembyid = $this->getitembyid($id);
        $query = $this->db->prepare("UPDATE item SET nombre_chocolate=?, precio_unidad=?,descripcion=? , stock =?, id_marca=? WHERE id_chocolate=?");
        $result =  $query->execute([$chocolate, $price, $description, $stock, $marca, $id]);
    }

    //solo los chocolates de la marca elegida.
    public function getitemandbrand($selected) {
        $query = $this->db->prepare("SELECT * FROM item a INNER JOIN marca b ON a.id_marca = b.id_marca WHERE a.id_marca=? ");
        $query->execute(array($selected));
        $itemandbrand = $query->fetchAll(PDO::FETCH_OBJ);
        return $itemandbrand;
    } 
 

    //items->id_marca
    //marca->id_marca

 }
