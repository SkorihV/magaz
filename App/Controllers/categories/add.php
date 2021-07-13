<?php

if (Requests::isPost()) {

    $category = Category::getFromPost();
    $inserted = Category::add($category);

    if ($inserted) {
        Response::redirect('/categories/list');
    } else {
        die("Что-то пошло не так");
    }
}

$smarty->display( 'categories/add.tpl');
