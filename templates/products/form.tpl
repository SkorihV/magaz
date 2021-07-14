
<br>
<form method="post" class="addProductForm" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$product.id}">
    <div class="formItem">
        <label for="name">Название товара</label>
        <input type="text" name="name" id="name" value="{$product.name}" required>
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
        <label for="images">Фото товара </label>
        <input type="file" name="images[]" id="images" multiple>
    </div>
    {if $product.images}
        <div class="form-group d-flex">
            {foreach from=$product.images item=image}
            <div class="card" style="width: 90px;">
                <div class="card-body">
                    <button type="submit" class="btn btn-danger btn-sm" data-image-id="{$image.id}" onclick="deleteImage(this)">Удалить</button>
                </div>
                <img src="{$image.path}" class="card-img-top" alt="{$image.name}">
            </div>
            {/foreach}
        </div>

        {literal}
            <script>
                function deleteImage(button) {
                    let imageId = $(button).attr('data-image-id');
                    console.log(imageId);
                    imageId = parseInt(imageId);

                    if (!imageId) {
                        alert('Проблема с image_id');
                        return false;
                    }
                    let url = '/products/delete_image';
                    const formData = new FormData();
                    formData.append('product_image_id', imageId);

                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then((response) => {
                        response.text()
                        .then((text) => {
                            if (text.indexOf('error') > -1) {
                                alert("Ошибка по умолчанию");
                            } else {
                              document.location.reload();
                            }
                        })
                    });
                    return false;
                }
            </script>
        {/literal}
    {/if}
    <div class="formItem">
        <label for="price">Цена </label>
        <input type="number" name="price" id="price" value="{$product.price}" required>
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


