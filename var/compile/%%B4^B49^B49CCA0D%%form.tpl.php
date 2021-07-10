<?php /* Smarty version 2.6.31, created on 2021-07-10 21:35:19
         compiled from products/form.tpl */ ?>

<br>
<form method="post" class="addProductForm">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
    <div class="formItem">
        <label for="name">Название товара</label>
        <input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['product']['name']; ?>
">
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
        <label for="price">Цена </label>
        <input type="number" name="price" id="price" value="<?php echo $this->_tpl_vars['product']['price']; ?>
">
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