<?php

if (!empty($_POST)) {
echo "<pre>";
    $category = get_category_from_post();
    $inserted = add_category($connect, $category);

    if ($inserted) {
        header('Location: /categories/list');
    } else {
        die("Что-то пошло не так");
    }
}

$smarty->display( 'categories/add.tpl');
