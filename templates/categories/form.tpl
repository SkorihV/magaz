<br>
<form method="post" class="addProductForm">
    <input type="hidden" name="id" value="{$category.id}">

    <div class="formItem">
        <label for="name">Название категории</label>
        <input type="text" name="name" id="name" value="{$category.name}">
    </div>
    <input class="link-item" type="submit" value="{$submit_name}">
</form>