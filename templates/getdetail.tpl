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
        <td>{$item->nombre_chocolate}</td>
        <td>{$item->precio_unidad}</td>
        <td>{$item->descripcion}</td>
        <td>{$item->stock}</td>
    </tbody>
</table>
<div class="img">

    {if isset({$item->img})}
        <img src ="{$item->img}" alt="imagen"/>
    {/if}

</div>

{include file = "footer.tpl"}