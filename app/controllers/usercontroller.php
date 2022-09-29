<?php
include_once 'app/models/usermodel.php';
include_once 'app/views/userview.php';

class usercontroller {
    private $model;
    private $view;

    function __construct () {
        $this->model = new usermodel();
        $this->view = new userview();
    }

    function validate(){
        if (!empty($_POST['user']) && (!empty($_POST['password']))){

            $user = $_POST['user'];
            $password = $_POST['password'];

            return $user && $password;

            header("Location: " . BASE_URL); 
        }
    }
    function login (){
        $this->view->showlogin();
        $this->model->adduser($user, $password);
    }
 
    function logout () {
       echo "Se ha deslogueado con exito";
    }
  
}
 