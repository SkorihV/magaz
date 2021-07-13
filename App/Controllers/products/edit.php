<?php

$id = $_GET['id'];
$id = (int) $id;

$product = [];

if ($id) {
    $product = Product::getById($id);
}
if (!empty($_POST)) {

    $product = Product::getFromPost();
    $edited = Product::updateById($id, $product);



    if ($edited) {
        header('Location: /products/list');
    } else {
        die("Что-то пошло не так");
    }
}
$categories = Category::getList();
$smarty->assign("categories", $categories);
$smarty->assign("product", $product );
$smarty->display( 'products/edit.tpl');

