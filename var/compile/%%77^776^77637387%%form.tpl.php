<?php /* Smarty version 2.6.31, created on 2021-07-05 20:32:52
         compiled from categories/form.tpl */ ?>
<br>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
">
    <label>
        Название категории<input type="text" name="name" value="<?php echo $this->_tpl_vars['category']['name']; ?>
">
    </label>
    <br>
    <input class="link-item" type="submit" value="<?php echo $this->_tpl_vars['submit_name']; ?>
">
</form>