<?php
include_once 'app/models/chocolatemodel.php';
include_once 'app/views/chocolateview.php';

class chocolatecontroller {

    private $model;
    private $view;
    private $homemodel;
    private $homeview;

    function __construct () {

        $this->model = new chocolatemodel();
        $this->view = new chocolateview();
        $this->homemodel = new homemodel();
        $this->homeview = new homeview();
    
    }
    function showlist(){
        $this->view->renderlist();
    }
    function showchocolatename (){
        $items = $this->model->getAll();
        $this->view->printitems($items);
    }
    function addData (){
        if (!empty($_POST['namechocolate'])&& (!empty($_POST['price']))&& (!empty($_POST['description']))&& (!empty($_POST['stock']))&&(!empty($_POST['id_marca']))){
            $namechocolate = $_POST['namechocolate'];
            $price= $_POST['price'];
            $description = $_POST['description'];
            $stock = $_POST['stock'];
            $id_marca = $_POST['id_marca'];

           $id = $this->model->insertData($namechocolate, $price, $description, $stock, $id_marca);
            
        }
    }
    /*function edit ($id, $brandname, $items){
        if (!empty($_POST['names'])&& (!empty($_POST['years']))&& (!empty($_POST['countrys']))){
        $names = $_POST['names'];
        $years = $_POST['years'];
        $countrys = $_POST['countrys'];
        $id = $this->model->update($id, $names, $years, $countrys);
        }
    }*/

    /*function delete ($id) {
        $this->model->deletebrand($id); 
        header("Location: " . BASE_URL);
    }*/
   /* function detail ($id){
        $this->model->GetDetail($id);
        $items = $this->model->getAll();
        $this->view->printOneDetail($items, $id);
    }*/
}