<?php /* Smarty version 2.6.31, created on 2021-07-13 13:21:08
         compiled from categories-list.tpl */ ?>

<ul class="category-list">
    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
        <li><a href="/categories/view?id=<?php echo $this->_tpl_vars['category']['id']; ?>
" class="link-item <?php if ($this->_tpl_vars['current_category'] == $this->_tpl_vars['category']['id']): ?>active<?php endif; ?>"><?php echo $this->_tpl_vars['category']['name']; ?>
</a></li>
    <?php endforeach; endif; unset($_from); ?>
</ul>