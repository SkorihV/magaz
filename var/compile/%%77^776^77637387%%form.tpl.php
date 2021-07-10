<?php /* Smarty version 2.6.31, created on 2021-07-10 20:32:41
         compiled from categories/form.tpl */ ?>
<br>
<form method="post" class="addProductForm">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
">

    <div class="formItem">
        <label for="name">Название категории</label>
        <input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['category']['name']; ?>
">
    </div>
    <input class="link-item" type="submit" value="<?php echo $this->_tpl_vars['submit_name']; ?>
">
</form>