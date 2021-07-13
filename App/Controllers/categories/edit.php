<?php

$id = Requests::getIntFromGet('id');

$category = [];

if ($id) {
    $category = Category::getById($id);
}

if (Requests::isPost()) {

    $category = Category::getFromPost();
    $edited = Category::updateById($id, $category);

    if ($edited) {
        Response::redirect('/categories/list');
    } else {
        die("Что-то пошло не так");
    }
}

$smarty->assign("category", $category );
$smarty->display( 'categories/edit.tpl');

