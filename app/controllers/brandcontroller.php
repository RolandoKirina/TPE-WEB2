<?php


require_once 'app/models/brandmodel.php';
require_once 'app/views/brandview.php';

class brandcontroller {

    private $model;
    private $view;


    function __construct () {
        $this->model = new brandmodel ();
        $this->view = new brandview ();
    }

    function showbrand () {

         $brands = $this->model->getAll();

         $this->view->showbrands($brands);
    }
}
