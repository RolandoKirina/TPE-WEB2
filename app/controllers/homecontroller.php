<?php
require_once './app/models/homemodel.php';
require_once './app/models/chocolatemodel.php';
require_once './app/views/homeview.php';

class Homecontroller {

    private $model;
    private $chocolatemodel;
    private $chocolateiew;
    private $view;

    function __construct () {
        $this->model = new Homemodel();
        $this->view = new Homeview();
        $this->chocolatemodel = new Chocolatemodel();
        $this->chocolateview = new Chocolateview ();
    }
    function showchocolatetable() {
        $items = $this->chocolatemodel->getall();  
        $brandnameandid = $this->getbrandnameandid();
        $brandname = $this->model->convertbrand();

        $this->view->showchocolatetable($items, $brandname, $brandnameandid);
    }

    function showbrandstable($brands){
        $this->view->showbrandtable($brands);
    }
    function getall(){
        $brands = $this->model->getall();
        return $brands;
    }
    function getbrandnameandid(){
        $brandnameandid = $this->model->getbrandnameandid();
        return $brandnameandid;
    }
    function adddata (){
        if (!empty($_POST['namebrand']) && (!empty($_POST['year'])) && (!empty($_POST['country']))){
            $namebrand = $_POST['namebrand'];
            $year= $_POST['year'];
            $country = $_POST['country'];
            $id = $this->model->insertdata($namebrand, $year, $country);
            //PREGUNTAR COMO HACER Q TE LLEVE A LA PAGINA 2
            header("Location: " . BASE_URL);
        }
    }
    function delete ($id) {
        $this->model->deletebrand($id);
    }
    function edit ($id){
        if (!empty($_POST['namebrand'])&& (!empty($_POST['year']))&& (!empty($_POST['country']))){
        $name = $_POST['namebrand'];
        $year = $_POST['year'];
        $country = $_POST['country'];
        $id = $this->model->update($name, $year, $country, $id);

        }
    }
    
}

