<?php /* Smarty version 2.6.31, created on 2021-07-05 11:28:33
         compiled from products/form.tpl */ ?>

<br>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
    <label>
        Название товара<input type="text" name="name" value="<?php echo $this->_tpl_vars['product']['name']; ?>
">
    </label>
    <br>
    <label>
        Цена <input type="number" name="price" value="<?php echo $this->_tpl_vars['product']['price']; ?>
">
    </label>
    <br>
    <label>
        Валюта <input type="text" name="currency" value="<?php echo $this->_tpl_vars['product']['currency']; ?>
">
    </label>
    <br>
    <label>
        Артикул <input type="text" name="article" value="<?php echo $this->_tpl_vars['product']['article']; ?>
">
    </label>
    <br>
    <label>
        Количество <input type="number" name="amount"  value="<?php echo $this->_tpl_vars['product']['amount']; ?>
">
    </label>
    <br>
    <label>
        Описание <textarea name="body"><?php echo $this->_tpl_vars['product']['body']; ?>
</textarea>
    </label>
    <br>
    <label>
        Вес <input type="number" name="weight" value="<?php echo $this->_tpl_vars['product']['weight']; ?>
">
    </label>
    <br>
    <label>
        Единицы веса <input type="text" name="unitWeight" value="<?php echo $this->_tpl_vars['product']['unitWeight']; ?>
">
    </label>
    <br>
    <input type="submit" value="Изменить">
</form>