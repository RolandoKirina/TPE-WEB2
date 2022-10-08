<?php
require_once './app/models/chocolatemodel.php';
require_once './app/views/chocolateview.php';

class Chocolatecontroller {

    private $model;
    private $view;
    private $homemodel;
    private $homeview;

    function __construct () {
        $this->model = new Chocolatemodel();
        $this->view = new Chocolateview();
        $this->brandmodel = new Brandmodel();
        $this->brandview = new Brandview();
    }
    //arreglar
    function showchocolatetable() {
        $items = $this->model->getall();
        $brands = $this->brandmodel->getall();
    
        foreach ($items as $item) {
          $item->id_marca = "no me sale :;(";
        }
        $this->view->showchocolatetable($items, $brands);
    }
    function showlist(){
        $this->view->renderlist();
    }
    function showchocolatename (){
        $items = $this->model->getall();
        $this->view->printitems($items);
    }
    function adddata () {
        if (!empty($_POST['namechocolate'])&& (!empty($_POST['price']))&& (!empty($_POST['description']))&& (!empty($_POST['stock']))&&(!empty($_POST['id_marca']))){
            $namechocolate = $_POST['namechocolate'];
            $price= $_POST['price'];
            $description = $_POST['description'];
            $stock = $_POST['stock'];
            $id_marca = $_POST['id_marca'];
            $id = $this->model->insertData($namechocolate, $price, $description, $stock, $id_marca);
            header("Location: " . BASE_URL . "item");
        }
    }

    function delete ($id) {
        $this->model->delete($id);
        header("Location: " . BASE_URL . "item");
    }
    function detail ($id){
        $item = $this->model->getitembyid($id);
        $this->view->printonedetail($item, $id);
    }

    function edit ($id, $brandform){
        if (!empty($_POST['names'])&& (!empty($_POST['years']))&& (!empty($_POST['countrys']))){
        $names = $_POST['names'];
        $years = $_POST['years'];
        $countrys = $_POST['countrys'];
        $id = $this->model->update($id, $names, $years, $countrys);
        }
    }
    function filter (){
        $brands = $this->chocolatemodel->getall();
        $this->view->showchocolatetable($items, $brands);
    }
    
}
