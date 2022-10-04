<?php
require_once './app/models/homemodel.php';
require_once './app/models/chocolatemodel.php';
require_once './app/views/homeview.php';

class homecontroller {

    private $model;
    private $chocolatemodel;
    private $chocolateiew;
    private $view;

    function __construct () {
        $this->model = new homemodel();
        $this->view = new homeview();
        $this->chocolatemodel = new chocolatemodel();
        $this->chocolateview = new chocolateview ();
    }

    function showgeneraltable() {
        $items = $this->chocolatemodel->getAll();   
        $BrandNameandId = $this->model->getBrandNameandId();
        $this->view->showtable($items, $BrandNameandId);
    }
    function ShowBrandsTable($brands){
        $this->view->ShowBrandsTable($brands);
    }
    function getAll(){
        $brands = $this->model->GetAll();
        return $brands;
    }
}

