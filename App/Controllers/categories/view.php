<?php

$category_id = (int)$_GET["id"] ?? 0;

$products = Product::getListByCategory($category_id);

$smarty->assign("current_category", $category_id);
$smarty->assign("products", $products);
$smarty->display("categories/view.tpl");