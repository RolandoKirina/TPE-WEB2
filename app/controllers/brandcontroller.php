<?php
require_once './app/models/brandmodel.php';
require_once './app/views/brandview.php';
require_once './app/models/chocolatemodel.php';
require_once './app/helpers/authhelper.php';

class Brandcontroller {

    private $model;
    private $chocolatemodel;
    private $chocolateiew;
    private $view;
    private $authhelper;

    function __construct () {
        
        $this->model = new Brandmodel();
        $this->view = new Brandview();
        $this->chocolatemodel = new Chocolatemodel();
        $this->chocolateview = new Chocolateview();
        $this->authhelper = new Authhelper();
    }

    function showbrandstable(){
        $logged = $this->authhelper->logged();
        $brands = $this->model->getall();
        $itemid = $this->chocolatemodel->getall();
        $this->view->showbrandtable($brands, $logged);
        
    }
    function getbrandnameandid(){
        $brandnameandid = $this->model->getbrandnameandid();
        return $brandnameandid;
    }
    function addbrand (){
        $logged = $this->authhelper->logged();
        if ($logged) {
        if (!empty($_POST['namebrand']) && (!empty($_POST['year'])) && (!empty($_POST['country']))){
            $namebrand = $_POST['namebrand'];
            $year= $_POST['year'];
            $country = $_POST['country'];
            $id = $this->model->insertdata($namebrand, $year, $country);
            header("Location: " . BASE_URL);
        }
        }
        else {
            $this->view->showerror();
        }
    }
    function delete ($id) {
        $logged = $this->authhelper->logged();
        if ($logged) {
        try {
            $this->model->delete($id);
            header("Location: " . BASE_URL);
        } 
        catch (PDOException $e){
         $this->view->showerror("No se puede eliminar la marca porque contiene al menos un chocolate");
        }
     }
    }
    function edit ($id) {
        $logged = $this->authhelper->logged();
        if ($logged) {
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
    else {
        $this->view->showerror();
     }
}


}