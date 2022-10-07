{include file = "header.tpl"}

<a href="home" type="button" class="btn btn-secondary">Volver Atras</a>
<h1>Ingresar</h1>
<form method="POST" action="login">
<label>Ingrese su gmail:  </label>
<input type="gmail" placeholder="Gmail" name="user">
<label>Ingrese su contraseña: </label>
<input type="password" placeholder="Contraseña" name="Password">
<button type="submit"> Enviar Datos </button> 
<div class="mt-3">
<a href="logout" type="button" class="btn btn-dark">Logout</a>
</div>

{include file = "footer.tpl"}