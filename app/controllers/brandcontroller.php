<?php


require_once './app/models/brandmodel.php';
require_once './app/views/brandview.php';

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

    function addData (){
            
            $name = $_POST['name'];
            $country = $_POST['country'];
            $year = $_POST['year'];

            $id = $this->model->insertData($name, $country, $year);

            header("Location: " . BASE_URL);
        }

    function delete ($id) {
        $this->model->deletebrand($id);
        
        header("Location: " . BASE_URL);

    }
    }

