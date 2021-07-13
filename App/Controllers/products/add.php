<?php

if (!empty($_POST)) {
    $product = Product::getFromPost();
    $inserted = Product::add($product);
    if ($inserted) {
        header('Location: /products/list');
    } else {
        die("Что-то пошло не так");
    }
}

$categories = Category::getList();
$smarty->assign("categories", $categories);
$smarty->display( 'products/add.tpl');
