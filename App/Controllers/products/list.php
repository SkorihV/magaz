<?php

$products = get_product_list($connect);

$categories = get_category_list($connect);
$smarty->assign('categories', $categories);
$smarty->assign('products', $products);
$smarty->display( 'products/index.tpl');
