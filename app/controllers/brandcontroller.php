<?php

require_once './app/models/brandmodel.php';
require_once './app/views/brandview.php';

class brandcontroller {

    private $model;
    private $view;

    function __construct () {
        $this->model = new brandmodel();
        $this->view = new brandview();
    }

    function showbrand () {
         $brands = $this->model->getAll();
         $this->view->showbrands($brands);
    }

    function addData (){
            $name = $_POST['name'];
            $year = $_POST['year'];
            $country = $_POST['country'];
            $id = $this->model->insertData($name, $year, $country);
            header("Location: " . BASE_URL);
        }

    function delete ($id) {
        $this->model->deletebrand($id);
        
        header("Location: " . BASE_URL);
    }
    function edit ($id){
        $name = $_POST['name'];
        $year = $_POST['year'];
        $country = $_POST['country'];
        $id = $this->model->update($id, $name, $year, $country);
        header("Location: " . BASE_URL);
    }
}

