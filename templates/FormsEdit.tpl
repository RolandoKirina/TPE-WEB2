{include file = "header.tpl"}

<h2>Editar Una marca</h2>
<form method="POST" action="edit" class="form-add">
    <label>Nombre de la Marca.</label>
        <input type="text" placeholder="Nombre" name="namebrand" class="form-control">
    <label>Año de Creacion</label>
        <input type="text" placeholder="Año" name="year" class="form-control">
    <label>Pais de la Marca</label>
        <input type="text" placeholder="Pais" name="country" class="form-control">
    <div class="mt-4">
        <ul class="ul">
        <li> <button class="btn btn-outline-success" type="submit"> Agregar </a></li>
        </ul>
    </div>
</form>

{include file="footer.tpl"}