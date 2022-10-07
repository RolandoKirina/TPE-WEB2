<?php
include_once 'app/models/usermodel.php';
include_once 'app/views/userview.php';

class Usercontroller {
    private $model;
    private $view;

    function __construct () {
        $this->model = new Usermodel();
        $this->view = new Userview();
    }

    function validate(){
        if (!empty($_POST['user']) && (!empty($_POST['password']))){

            $user = $_POST['user'];
            $password = $_POST['password'];

            return $user && $password;

            header("Location: " . BASE_URL); 
        }
    }
    function showlogin (){

        $this->view->showlogin();
    }
 
    function logout () {
       echo "Se ha deslogueado con exito";
    }
  
}
