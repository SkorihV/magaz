<?php


$category_id = Requests::getIntFromGet('id');

$category = Category::getById($category_id);
$products = Product::getListByCategory($category_id);


$smarty->assign("current_category", $category);
$smarty->assign("products", $products);
$smarty->display("categories/view.tpl");