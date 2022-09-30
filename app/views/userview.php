<?php


class userview {
    function showlogin () {
    echo '
    <a href="item">Volver Atras</a>
    <h1>Complete el formulario: </h1>
    <form method="POST">
    <label>Ingrese su nombre de usuario: </label>
    <input type="text" placeholder="Usuario" name="user">
    <label>Ingrese su contraseña: </label>
    <input type="text" placeholder="Contraseña" name="Password">
    <button> Enviar Datos </button> 
    <a href="logout">Logout</a>;
    ';
    }


    function showmsg (){
        //Si el usuario existe y las contraseñas coinciden
      if($user && $password==($user->password)){
       echo "Ha iniciado sesión";
      }
       else{
           echo "Ha habido un error, intentelo de nuevo";
       }
}
}