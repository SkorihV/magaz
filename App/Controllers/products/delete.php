<?php
$id = Requests::getIntFromPost('id', false);


if(!$id) {
    die ("Что то пошло не так с удалением");
}

$deleted = Product::deleteById($id);

if ($deleted) {
    Response::redirect('/products/list');
} else {
    die("Что-то пошло не так");
}