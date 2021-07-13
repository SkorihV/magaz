<?php

if (!empty($_POST)) {
echo "<pre>";
    $category = Category::getFromPost();
    $inserted = Category::add($category);

    if ($inserted) {
        header('Location: /categories/list');
    } else {
        die("Что-то пошло не так");
    }
}

$smarty->display( 'categories/add.tpl');
