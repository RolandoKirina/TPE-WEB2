{include file = "header.tpl"}
<h2>Editar la marca</h2>
<form method="POST" class="form-add">
    <label>Nombre de la Marca.</label>
        <input type="text"  name="namebrand" value="{$brandbyid->nombre_marca}"class="form-control">
    <label>Año de Creacion</label>
        <input type="text"  name="year" value="{$brandbyid->anio_creacion}" class="form-control">
    <label>Pais de la Marca</label>
        <input type="text" name="country"value="{$brandbyid->pais_marca}"c class="form-control">
    <div class="mt-4">
    <input type="hidden" name="idhidden" value="{$brandbyid->id_marca}">
    <button type="submit">Editar</a>
    </div>
</form>
</div>
{include file="footer.tpl"}