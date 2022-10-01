{include file = "header.tpl"}

<a href="home" type="button" class="btn btn-secondary">Volver Atras</a>
<h1>Ingresar</h1>
<form method="POST">
<label>Ingrese su nombre de usuario: </label>
<input type="text" placeholder="Usuario" name="user">
<label>Ingrese su contraseña: </label>
<input type="text" placeholder="Contraseña" name="Password">
<button> Enviar Datos </button> 
<div class="mt-3">
<a href="logout" type="button" class="btn btn-dark">Logout</a>
</div>

{include file = "footer.tpl"}