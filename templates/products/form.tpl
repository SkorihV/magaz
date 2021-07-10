
<br>
<form method="post" class="addProductForm">
    <input type="hidden" name="id" value="{$product.id}">
    <div class="formItem">
        <label for="name">Название товара</label>
        <input type="text" name="name" id="name" value="{$product.name}">
    </div>

    <div class="formItem">
        <label for="category_id">Категория товара товара</label>
        <select name="category_id" id="category_id">
            <option value="0">Не выбрано</option>
            {foreach from=$categories item=category}
                <option {if $product.category_id == $category.id} selected {/if} value="{$category.id}">{$category.name}</option>
            {/foreach}
        </select>
    </div>

    <div class="formItem">
        <label for="price">Цена </label>
        <input type="number" name="price" id="price" value="{$product.price}">
    </div>
    <div class="formItem">
        <label for="currency">Валюта</label>
        <input type="text" name="currency" id="currency" value="{$product.currency}">
    </div>

    <div class="formItem">
        <label for="article">Артикул</label>
        <input type="text" name="article" id="article" value="{$product.article}">
    </div>
    <div class="formItem">
        <label for="amount">Количество</label>
        <input type="number" name="amount" id="amount" value="{$product.amount}">
    </div>
    <div class="formItem">
        <label for="body">Описание</label>
        <textarea name="body" id="body">{$product.body}</textarea>
    </div>
    <div class="formItem">
        <label for="weight">Вес</label>
        <input type="number" name="weight" id="weight" value="{$product.weight}">
    </div>
    <div class="formItem">
        <label for="unitWeight">Единицы веса </label>
        <input type="text" name="unitWeight" id="unitWeight" value="{$product.unitWeight}">
    </div>

    <div class="formItem"></div>

    <input class="link-item" type="submit" value={$submit_name}>
</form>