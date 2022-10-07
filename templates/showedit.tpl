{include file = "header.tpl"}
<h2>Editar la marca</h2>
<form method="POST" class="form-add">
    <label>Nombre de la Marca.</label>
        <input type="text"  name="namebrand" class="form-control">
    <label>Año de Creacion</label>
        <input type="text"  name="year" class="form-control">
    <label>Pais de la Marca</label>
        <input type="text" name="country" class="form-control">
    <div class="mt-4">
    <input type="hidden" name="oculto">
    <input type="hidden" name="idhidden" value="{$brandbyid->id_marca}">
    <button type="submit">Editar</a>
    </div>
</form>
</div>
{include file="footer.tpl"}