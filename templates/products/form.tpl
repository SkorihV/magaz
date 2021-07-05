
<br>
<form method="post">
    <input type="hidden" name="id" value="{$product.id}">
    <label>
        Название товара<input type="text" name="name" value="{$product.name}">
    </label>
    <br>
    <label>
        Цена <input type="number" name="price" value="{$product.price}">
    </label>
    <br>
    <label>
        Валюта <input type="text" name="currency" value="{$product.currency}">
    </label>
    <br>
    <label>
        Артикул <input type="text" name="article" value="{$product.article}">
    </label>
    <br>
    <label>
        Количество <input type="number" name="amount"  value="{$product.amount}">
    </label>
    <br>
    <label>
        Описание <textarea name="body">{$product.body}</textarea>
    </label>
    <br>
    <label>
        Вес <input type="number" name="weight" value="{$product.weight}">
    </label>
    <br>
    <label>
        Единицы веса <input type="text" name="unitWeight" value="{$product.unitWeight}">
    </label>
    <br>
    <input class="link-item" type="submit" value="Изменить">
</form>