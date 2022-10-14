<?php

require_once 'app/models/usermodel.php';
require_once 'app/views/userview.php';
require_once 'app/helpers/authhelper.php';

class Authcontroller {

    private $model;
    private $view;
    private $helper;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->helper = new AuthHelper();
    }

    public function showformlogin() {
        $this->view->showFormLogin();
    }

    public function validateuser() {
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userinfo = $this->model->getuserbyemail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($userinfo && password_verify($password, $userinfo->password)) {
            // inicio una session 
            $this->helper->login($userinfo);
            header("Location: " . BASE_URL);
        } 
        else {
           $this->view->showFormLogin("gmail o contraseña incorrectos");
        } 
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}