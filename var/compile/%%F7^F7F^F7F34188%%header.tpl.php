<?php /* Smarty version 2.6.31, created on 2021-07-05 20:59:20
         compiled from header.tpl */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<div class="site-wrapper">
    <ul class="menu-top">
        <li><a class="link-item" href="/products/">Товары</a></li>
        <li><a class="link-item" href="/categories/">Категории</a></li>
    </ul>
    <?php if ($this->_tpl_vars['h1']): ?><h1><?php echo $this->_tpl_vars['h1']; ?>
</h1><?php endif; ?>

    <div class="body-content">
        <div class="left-side">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "/categories-list.tpl", 'smarty_include_vars' => array('categories' => $this->_tpl_vars['categories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        <div class="right-side">



