<?php

if (!empty($_POST)) {

    $product = get_product_from_post();
    $inserted = add_product($connect, $product);

    if ($inserted) {
        header('Location: /products/list');
    } else {
        die("Что-то пошло не так");
    }
}


$smarty->display( 'products/add.tpl');
