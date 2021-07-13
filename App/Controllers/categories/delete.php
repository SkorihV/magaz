<?php

$id = Requests::getIntFromPost('id', );

if(!$id) {
    die ("Что то пошло не так с удалением");
}

$deleted = Category::deleteById($id);

if ($deleted) {
    Response::redirect('/categories/list');
} else {
    die("Что-то пошло не так");
}