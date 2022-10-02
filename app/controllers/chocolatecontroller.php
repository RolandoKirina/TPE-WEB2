<?php
include_once 'app/models/chocolatemodel.php';
include_once 'app/views/chocolateview.php';


class chocolatecontroller {

    private $model;
    private $view;

    function __construct () {

        $this->model = new chocolatemodel();
        $this->view = new chocolateview();
    
    }
    function showlist(){
       $this->view->renderlist();
    }

    function showitems (){
        
       $items = $this->model->getAll();

       $this->view->printitems($items);

    }

}