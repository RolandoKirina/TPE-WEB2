{include file = "header.tpl"}
<table class="table">




<h1>Chocolateria</h1>
<a href="login">Loguearse</a>;
<table>
    <th>Ver Chocolate</th>
    <th>Ver marca</th>
    <th><a href="marca">Seleccionar todos los chocolates de una marca</a></th>
</table>'
    <tbody>
        <thead>
           <th>Nombre Del Chocolate </th>
           <th>Precio Unidad </th>
           <th>descripcion</th>
           <th>Stock</th>
        </thead>
    {foreach from=$items item=$item}
        <tr>
            <td> {$item->nombre_chocolate} </td>
            <td> {$item->precio_unidad} </td>
            <td> {$item->descripcion} </td>
            <td> <a href="edit/{$item->id_marca}" class="btn btn-outline-success" type="button"> Editar</a></td>
            <td> <a href="delete/{$item->id_marca}"class="btn btn-outline-danger" type="button">Eliminar</a></td>
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
