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
    public function showformlogin() {
        $this->view->showFormLogin();
    }

    function validateuser () {
        
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getuserbygmail($email);

        // verifico que el usuario existe y que las contraseñas coinciden
        if ($user && password_verify($password, $user->password)) {
              // inicio una session para este usuario
              session_start();
              $_SESSION['USER_ID'] = $user->id;
              $_SESSION['USER_EMAIL'] = $user->email;
              $_SESSION['IS_LOGGED'] = true;
              header("Location: " . BASE_URL);
             
        }
        else {
            $this->view->showformlogin("El usuario o la contraseña son incorrectos");
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
        }
}


