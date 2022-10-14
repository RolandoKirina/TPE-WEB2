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

    function __construct () {
        $this->model = new Brandmodel();
        $this->view = new Brandview();
        $this->chocolatemodel = new Chocolatemodel();
        $this->chocolateview = new Chocolateview();
        //barrera de seguridad
       /* $authhelper = new Authhelper();
        $authhelper->checkloggedin();*/

    }

    function showbrandstable(){
        $brands = $this->model->getall();
        $itemid = $this->chocolatemodel->getall();
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
        try {
            $this->model->delete($id);
            header("Location: " . BASE_URL);
        } 
        catch (PDOException $e){
         $this->view->showerror("No se puede eliminar la marca porque contiene al menos un chocolate");
        }
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


