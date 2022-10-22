{include file = "header.tpl"}
<h2>Editar Item</h2>
<form method="POST" class="form-add">
    <label>Nombre del Chocolate.</label>
        <input type="text" placeholder="Nombre" value="{$itembyid->nombre_chocolate}" name="chocolate" class="form-control">
    <label>Precio.</label>
        <input type="text" placeholder="Precio" name="price" value="{$itembyid->precio_unidad}" class="form-control">
    <label>Descripción.</label>
        <input type="text" placeholder="Descripcion" name="description" value="{$itembyid->descripcion}" class="form-control">
    <label>Stock.</label>
    <input type="text" placeholder="Stock" name="stock" value="{$itembyid->stock}"class="form-control">
    <label>Marca a la cual pertenece el Chocolate.</label>
    <select name="marca" class="form-control">
    {foreach from=$brands  item=$brand}
        <option
        {if {$brand->id_marca} == {{$items->id_marca}}} 
            selected = {$brand->id_marca}
        {/if}  
        value={$brand->id_marca}> {$brand->nombre_marca}</option>
    {/foreach}
    </select>  
    <input type="hidden" name="itembyidhidden" value="{$itembyid->id_chocolate}">
    <div class="mt-4">
        <ul class="ul">
        <li> <button class="btn btn-outline-success" type="submit"> Guardar Cambios </a></li>
        </ul>
    </div>
</form>
<div>


{include file="footer.tpl"}