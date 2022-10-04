{include file = "header.tpl"}
<h1>Tabla Chocolates  </h1>
<table class="table table-striped table-dark">
    <thead>
        <th>Nombre Del Chocolate</th>
        <th>Nombre De la Marca</th>
        <th>Ver detalle </th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    {foreach from=$items item=$item}
        <tr>
            <td>{$item->nombre_chocolate}</td>
            <td>Marca a la cual pertenece </td>
            <td> <a href="detail/{$item->id_chocolate}" class="btn btn-outline-success" type="button"> Detalles del Producto</a></td>
            <td> <a href="edit/{$item->id_chocolate}" class="btn btn-outline-success" type="button"> Editar</a></td>
            <td> <a href="delete/{$item->id_chocolate}"class="btn btn-outline-danger" type="button">Eliminar</a></td>
        </tr>
    {/foreach}  
    </tbody>
</table>

<h2>Agregar un Chocolate </h2>
<form method="POST" action="add" class="form-add">
    <label>Nombre del Chocolate.</label>
        <input type="text" placeholder="Nombre" name="namechocolate" class="form-control">
    <label>Precio.</label>
        <input type="text" placeholder="Precio" name="price" class="form-control">
    <label>Descripción.</label>
        <input type="text" placeholder="Descripcion" name="description" class="form-control">
    <label>Stock.</label>
    <input type="text" placeholder="Stock" name="stock" class="form-control">
    <label>Marca a la cual pertenece el Chocolate.</label>
    <select name="id_marca" class="form-control">
    {foreach from=$BrandNameandId  item=$brand}
        <option
        {if {$brand->id_marca} == {{$items->id_marca}}} 
            selected = {$brand->id_marca}
        {/if}  
        value={$brand->id_marca}>{$brand->nombre_marca}</option>
    {/foreach}
    </select>  
    <div class="mt-4">
        <ul class="ul">
        <li> <button class="btn btn-outline-success" type="submit"> Agregar </a></li>
        </ul>
    </div>
</form>

<h2>Editar Item</h2>
<form method="POST" class="form-add">
    <label>Nombre del Item</label>
        <input type="text" placeholder="marca" name="names" class="form-control">
    <label>bla</label>
        <input type="text" placeholder="año" name="years" class="form-control">
    <label>bla</label>
        <input type="text" placeholder="pais" name="countrys" class="form-control">
    <div class="mt-4">
        <ul class="ul">
          <button type="submit">Enviar Edicion</button>
        </ul>
    </div>
</form>

{include file="footer.tpl"}







