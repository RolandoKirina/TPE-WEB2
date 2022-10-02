{include file = "header.tpl"}
<h1>Tabla Chocolates  </h1>
<table class="table">
    <tbody>
        <thead>
           <th>Nombre De la Marca </th>
           <th>Nombre Del Chocolate </th>
           <th>Pais De Origen </th>
           <th>Ver detalle </th>
           <th>Editar</th>
           <th>Eliminar</th>
        </thead>
    {foreach from=$brands item=$brand}
        <tr>
            <td> {$brand->nombre_marca} </td>
            <td> {$brand->anio_creacion} </td>
            <td> {$brand->pais_marca} </td>
            <td> <a href="detail/{$brand->id_marca}" class="btn btn-outline-success" type="button"> Ver detalle</a></td>
            <td> <a href="edit/{$brand->id_marca}" class="btn btn-outline-success" type="button"> Editar</a></td>
            <td> <a href="delete/{$brand->id_marca}"class="btn btn-outline-danger" type="button">Eliminar</a></td>
        </tr>
    {/foreach}
    </tbody>
</table>

<h2>Agregar una marca </h2>

<form method="POST" action="add" class="form-add">
    <label>Nombre de la marca</label>
        <input type="text" placeholder="marca" name="name" class="form-control">
    <label>Año de creacion</label>
        <input type="text" placeholder="año" name="year" class="form-control">
    <label>Pais de origen de la marca </label>
        <input type="text" placeholder="pais" name="country" class="form-control">
    <div class="mt-4">
        <ul class="ul">
        <li> <button class="btn btn-outline-success" type="submit"> Agregar </a></li>
        </ul>
    </div>
</form>

<p>Editar una marca </p>
<form method="POST" action="edit">
    <label>Nombre de la marca</label>
    <input type="text" placeholder="marca" name="name" class="form-control">
    <label>Año de creacion</label>
    <input type="text" placeholder="año" name="year" class="form-control">
    <label>Pais de origen de la marca </label>
    <input type="text" placeholder="pais" name="country" class="form-control">
    <div class="mt-4">
        <ul class="ul">
        <li> <button class="btn btn-outline-success" type="submit"> Agregar </a></li>
        </ul>
    </div>
</form>
{include file="footer.tpl"}







