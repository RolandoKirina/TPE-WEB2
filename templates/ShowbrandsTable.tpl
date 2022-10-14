{include file = "header.tpl"}
<h1>Tabla Marcas  </h1>
<table class="table table-striped table-dark">
    <thead>
        <th>Nombre De la Marca</th>
        <th>Año Creacion </th>
        <th>Pais Marca </th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    {foreach from=$brands item=$brand}
        <tr>
        <td>{$brand->nombre_marca}</td>
        <td>{$brand->anio_creacion}</td>
        <td>{$brand->pais_marca}</td>
        <td> <a href="edit/{$brand->id_marca}" class="btn btn-outline-success" type="button"> Editar</a></td>
        <td> <a href="delete/{$brand->id_marca}"class="btn btn-outline-danger" type="button">Eliminar</a></td>
        </tr>
    {/foreach}
    </tbody>
</table>

<h3>Agregar una Marca </h3>
<form method="POST" action="add" class="form-add">
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