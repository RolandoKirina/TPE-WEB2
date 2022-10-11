<?php
require_once './app/models/brandmodel.php';
require_once './app/models/chocolatemodel.php';
require_once './app/views/brandview.php';

class Brandcontroller {

    private $model;
    private $chocolatemodel;
    private $chocolateiew;
    private $view;

    function __construct () {
        $this->model = new Brandmodel();
        $this->view = new Brandview();
        $this->chocolatemodel = new Chocolatemodel();
        $this->chocolateview = new Chocolateview ();
    }

    function showbrandstable(){
        $brands = $this->model->getall();
        $itemid = $this->chocolatemodel->getall();
        count($itemid);
        $this->view->showbrandtable($brands);
    }
    function getbrandnameandid(){
        $brandnameandid = $this->model->getbrandnameandid();
        return $brandnameandid;
    }
    function add (){
        if (!empty($_POST['namebrand']) && (!empty($_POST['year'])) && (!empty($_POST['country']))){
            $namebrand = $_POST['namebrand'];
            $year= $_POST['year'];
            $country = $_POST['country'];
            $id = $this->model->insertdata($namebrand, $year, $country);
            header("Location: " . BASE_URL);
        }
    }
    function delete ($id) {
        //if ($cantitems > 0){
            //echo "no se puede borrar perdon";
        //
        //else{
            $this->model->delete($id);
            header("Location: " . BASE_URL);
        //}
        // hay 0 items pertenencientes a esa categoria, se puede borrar, 
   // si hay uno o mas items pertenencientes a esa categoria, mostrar un msg de error ...}
        }
    function edit ($id) {
        $brandbyid = $this->model->getbrandbyid($id);
        $this->view->showedit($brandbyid);
        if (!empty($_POST['namebrand'])&& (!empty($_POST['year']))&& (!empty($_POST['country']))){
        $name = $_POST['namebrand'];
        $year = $_POST['year'];
        $country = $_POST['country'];
        $id = $this->model->update($name, $year, $country, $id);
        header("Location: " . BASE_URL);
        }
    }
}


