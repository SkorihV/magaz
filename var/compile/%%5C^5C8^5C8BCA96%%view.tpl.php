<?php /* Smarty version 2.6.31, created on 2021-07-14 14:58:16
         compiled from categories/view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('h1' => "Списко товаров")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="table-products">
    <thead>
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Цена</th>
        <th>Валюта</th>
        <th>Артикул</th>
        <th>Количество</th>
        <th>Описание</th>
        <th>Вес</th>
        <th>Единицы веса</th>
        <th>*</th>
        <th>*</th>
    </tr>
    </thead>

    <tbody>
    <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['product']['id']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['name']; ?>

                <br>
                <?php if ($this->_tpl_vars['product']['images']): ?>
                    <?php $_from = $this->_tpl_vars['product']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['image']):
?>
                        <img src="<?php echo $this->_tpl_vars['image']['path']; ?>
" alt="<?php echo $this->_tpl_vars['image']['name']; ?>
" width="50" height="auto">
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>

            </td>
            <td><?php echo $this->_tpl_vars['product']['category_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['price']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['corrency']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['article']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['amount']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['body']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['weight']; ?>
</td>
            <td><?php echo $this->_tpl_vars['product']['unitWeight']; ?>
</td>
            <td>
                <a  class="link-item" href="/products/edit?id=<?php echo $this->_tpl_vars['product']['id']; ?>
">Редактировать</a>
            </td>
            <td>
                <form action="/products/delete" method="POST">
                    <input class="link-item" type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
                    <input class="link-item" type="submit" value="Удалить">
                </form>
            </td>

        </tr>
    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
