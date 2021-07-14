<?php /* Smarty version 2.6.31, created on 2021-07-14 15:57:15
         compiled from products/form.tpl */ ?>

<br>
<form method="post" class="addProductForm" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
    <div class="formItem">
        <label for="name">Название товара</label>
        <input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['product']['name']; ?>
" required>
    </div>

    <div class="formItem">
        <label for="category_id">Категория товара товара</label>
        <select name="category_id" id="category_id">
            <option value="0">Не выбрано</option>
            <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
                <option <?php if ($this->_tpl_vars['product']['category_id'] == $this->_tpl_vars['category']['id']): ?> selected <?php endif; ?> value="<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
    </div>
    <div class="formItem">
        <label for="images">Фото товара </label>
        <input type="file" name="images[]" id="images" multiple>
    </div>
    <?php if ($this->_tpl_vars['product']['images']): ?>
        <div class="form-group d-flex">
            <?php $_from = $this->_tpl_vars['product']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['image']):
?>
            <div class="card" style="width: 90px;">
                <div class="card-body">
                    <button type="submit" class="btn btn-danger btn-sm" data-image-id="<?php echo $this->_tpl_vars['image']['id']; ?>
" onclick="deleteImage(this)">Удалить</button>
                </div>
                <img src="<?php echo $this->_tpl_vars['image']['path']; ?>
" class="card-img-top" alt="<?php echo $this->_tpl_vars['image']['name']; ?>
">
            </div>
            <?php endforeach; endif; unset($_from); ?>
        </div>

        <?php echo '
            <script>
                function deleteImage(button) {
                    let imageId = $(button).attr(\'data-image-id\');
                    console.log(imageId);
                    imageId = parseInt(imageId);

                    if (!imageId) {
                        alert(\'Проблема с image_id\');
                        return false;
                    }
                    let url = \'/products/delete_image\';
                    const formData = new FormData();
                    formData.append(\'product_image_id\', imageId);

                    fetch(url, {
                        method: \'POST\',
                        body: formData
                    })
                    .then((response) => {
                        response.text()
                        .then((text) => {
                            if (text.indexOf(\'error\') > -1) {
                                alert("Ошибка по умолчанию");
                            } else {
                              document.location.reload();
                            }
                        })
                    });
                    return false;
                }
            </script>
        '; ?>

    <?php endif; ?>
    <div class="formItem">
        <label for="price">Цена </label>
        <input type="number" name="price" id="price" value="<?php echo $this->_tpl_vars['product']['price']; ?>
" required>
    </div>
    <div class="formItem">
        <label for="currency">Валюта</label>
        <input type="text" name="currency" id="currency" value="<?php echo $this->_tpl_vars['product']['currency']; ?>
">
    </div>
    <div class="formItem">
        <label for="article">Артикул</label>
        <input type="text" name="article" id="article" value="<?php echo $this->_tpl_vars['product']['article']; ?>
">
    </div>
    <div class="formItem">
        <label for="amount">Количество</label>
        <input type="number" name="amount" id="amount" value="<?php echo $this->_tpl_vars['product']['amount']; ?>
">
    </div>
    <div class="formItem">
        <label for="body">Описание</label>
        <textarea name="body" id="body"><?php echo $this->_tpl_vars['product']['body']; ?>
</textarea>
    </div>
    <div class="formItem">
        <label for="weight">Вес</label>
        <input type="number" name="weight" id="weight" value="<?php echo $this->_tpl_vars['product']['weight']; ?>
">
    </div>
    <div class="formItem">
        <label for="unitWeight">Единицы веса </label>
        <input type="text" name="unitWeight" id="unitWeight" value="<?php echo $this->_tpl_vars['product']['unitWeight']; ?>
">
    </div>

    <div class="formItem"></div>

    <input class="link-item" type="submit" value=<?php echo $this->_tpl_vars['submit_name']; ?>
>
</form>

