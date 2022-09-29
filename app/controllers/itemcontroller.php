<?php
include_once 'app/models/itemmodel.php';
include_once 'app/views/itemview.php';


class itemcontroller {

    private $model;
    private $view;

    function __construct () {

        $this->model = new itemmodel();
        $this->view = new itemview();
    
    }
    function showlist(){
       $this->view->renderlist();
    }

    function showitems (){
        
       $items = $this->model->getAll();

       $this->view->printitems($items);

    }

}