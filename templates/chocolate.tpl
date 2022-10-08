{include file = "header.tpl"}
<h1>Detalles del Chocolate </h1>

<table class="table table-striped table-dark">
    <thead>
        <th>Nombre Del Chocolate</th>
        <th>Precio Unidad</th>
        <th>Descripcion</th>
        <th>Stock</th>
    </thead>
   <tbody>
  {foreach from=$item item=$it}
        <tr>
        <td>{$it->nombre_chocolate}</td>
        <td>{$it->precio_unidad}</td>
        <td>{$it->descripcion}</td>
        <td>{$it->stock}</td>
        </tr>
    {/foreach}
    </tbody>
    
</table
    