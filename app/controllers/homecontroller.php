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
        $brandname = $this->model->getBrandNameandId();
        $items = $this->model->getAllitems();   
        $BrandNameandId = $this->model->getBrandNameandId();
        $this->view->showtable($brandname, $items, $BrandNameandId);
    }

}

