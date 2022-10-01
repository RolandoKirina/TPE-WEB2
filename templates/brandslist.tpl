{include file = "header.tpl"}

<table class="table">
    <tbody>
        <thead>
           <th>Nombre De La marca </th>
           <th>Pais De Origen </th>
           <th>Año creación </th>
           <th>Editar</th>
           <th>Eliminar</th>
        </thead>
    {foreach from=$brands item=$brand}
        <tr>
            <td> {$brand->nombre_marca} </td>
            <td> {$brand->pais_marca} </td>
            <td> {$brand->anio_creacion} </td>
            <td> <a href="edit/{$brand->id_marca}" class="btn btn-success" type="button"> Editar</a></td>
            <td> <a href="delete/{$brand->id_marca}"class="btn btn-danger" type="button">Eliminar</a></td>
        </tr>
    {/foreach}
    </tbody>
</table>
<h2>Agregar una marca </h2>

<form method="POST" class="form-add">
    <label>Nombre de la marca</label>
        <input type="text" placeholder="marca" name="name" class="form-control">
    <label>Pais de origen de la marca </label>
        <input type="text" placeholder="pais" name="country" class="form-control">
    <label>Año de creacion</label>
        <input type="number" placeholder="año" name="year" class="form-control">
</form>
<div class="mt-5">
    <ul class="ul">
    <li> <a href="add" class="btn btn-success" type="button"> Agregar </a></li>
    </ul>
</div>

{include file="footer.tpl"}














{include file="footer.tpl"}