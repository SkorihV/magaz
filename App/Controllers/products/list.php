<?php
$current_page =(int) ($_GET['p'] ?? 0);
$limit = 2;
$offset = ($current_page - 1) * $limit;

if ($offset < 0) {
    $offset = 0;
}

$products_count = Product::getListCount();
$pages_count = ceil($products_count / $limit);

$products = Product::getList( $limit, $offset);


$smarty->assign('pages_count', $pages_count);
$smarty->assign('products', $products);
$smarty->display( 'products/index.tpl');
