<?php

$id = Requests::getIntFromGet('id');

$product = [];

if ($id) {
    $product = Product::getById($id);
}
if (Requests::isPost()) {

    $product = Product::getFromPost();
    $edited = Product::updateById($id, $product);

    if ($edited) {
        Response::redirect("/products/list");
    } else {
        die("Что-то пошло не так");
    }
}
$categories = Category::getList();

$smarty->assign("categories", $categories);
$smarty->assign("product", $product );
$smarty->display( 'products/edit.tpl');

