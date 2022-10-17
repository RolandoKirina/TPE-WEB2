<?php
require_once './app/models/chocolatemodel.php';
require_once './app/views/chocolateview.php';
require_once './app/helpers/authhelper.php';

class Chocolatecontroller {

    private $model;
    private $view;
    private $homemodel;
    private $homeview;
    private $authhelper;

    function __construct () {
        $this->model = new Chocolatemodel();
        $this->view = new Chocolateview();
        $this->brandmodel = new Brandmodel();
        $this->brandview = new Brandview();
        $this->authhelper = new Authhelper();
    }
    
    function showchocolatetable() {
        $logged = $this->authhelper->logged();
        $items = $this->model->getall();
        $brands = $this->brandmodel->getall();
        foreach ($items as $item) {
          $item->id_marca = $this->brandmodel->getbrandbyid($item->id_marca)->nombre_marca;
        }
        $this->view->showchocolatetable($items, $brands, $logged);
    }
    function showlist(){
        $this->view->renderlist();
    }
    function showchocolatename (){
        $items = $this->model->getall();
        $this->view->printitems($items);
    }
    function adddata () {
        $logged = $this->authhelper->logged();
        if ($logged) {
            if (!empty($_POST['namechocolate'])&& (!empty($_POST['price']))&& (!empty($_POST['description']))&& (!empty($_POST['stock']))&&(!empty($_POST['id_marca']))){
                $namechocolate = $_POST['namechocolate'];
                $price= $_POST['price'];
                $description = $_POST['description'];
                $stock = $_POST['stock'];
                $idmarca = $_POST['id_marca'];
    
            if ($_FILES['input_name']['type'] == "image/jpg" ||  $_FILES['input_name']['type'] == "image/jpeg" 
            ||  $_FILES['input_name']['type'] == "image/png") {
                // con el tmp name pasamos el archivo 
                $this->model->insertData($namechocolate, $price, $description, $stock, $idmarca, $_FILES['input_name']);
            }
            else {
                $this->model->insertData($namechocolate, $price, $description, $stock, $idmarca);
            }
        }
        header("Location: " . BASE_URL . "item");
     }
     /*else {
        $this->view->showErrorEmptyForm($logged);
    }*/
    }
    function delete ($id) {
        $logged = $this->authhelper->logged();
        if ($logged) {
        $this->model->delete($id);
        header("Location: " . BASE_URL . "item");
        }
        else {
           $this->view->showerror();
        }
    }
    function showedit ($id) {
        $brands = $this->brandmodel->getall();
        $items = $this->model->getall();
        $itembyid = $this->model->getitembyid($id);
        $this->view->formedititem($brands, $items, $itembyid);
    }

    function edit ($id){
        $logged = $this->authhelper->logged();
        if ($logged){
        $this->showedit($id);
        if (!empty($_POST['chocolate'])&& (!empty($_POST['price']))&& (!empty($_POST['description']))) { 
        $chocolate = $_POST['chocolate'];
        $price= $_POST['price'];
        $description= $_POST['description'];
        $stock = $_POST['stock'];
        $marca = $_POST['marca'];
        $id = $this->model->update($chocolate, $price, $description, $stock, $marca, $id);
        header("Location: " . BASE_URL . "item");
        }    
     }
    }
    function detail ($id) {
       $item = $this->model->getitemdetail($id);
       $this->view->showdetail($item);
    }

    function filter () {
        if (isset($_POST['selected']) && (!empty($_POST['selected']))){
            $selected = $_POST['selected'];
            $itemandbrand = $this->model->getitemandbrand($selected);
            $this->view->showresultfilter($itemandbrand);
        }
    }
 }

