<?php /* Smarty version 2.6.31, created on 2021-07-10 21:43:50
         compiled from categories-list.tpl */ ?>

<ul class="category-list">
    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
        <li><a href="" class="link-item"><?php echo $this->_tpl_vars['category']['name']; ?>
</a></li>
    <?php endforeach; endif; unset($_from); ?>
</ul>