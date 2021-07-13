<?php

if (Requests::isPost()) {
    $product = Product::getFromPost();
    $inserted = Product::add($product);
    if ($inserted) {
        Response::redirect('/products/list');
    } else {
        die("Что-то пошло не так");
    }
}

$categories = Category::getList();
$smarty->assign("categories", $categories);
$smarty->display( 'products/add.tpl');
