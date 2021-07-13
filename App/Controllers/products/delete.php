<?php

$id = $_POST['id'];
$id = (int)$id;

if(!$id) {
    die ("Что то пошло не так с удалением");
}

$deleted = Product::deleteById($id);

if ($deleted) {
    header('Location: /products/list');
} else {
    die("Что-то пошло не так");
}