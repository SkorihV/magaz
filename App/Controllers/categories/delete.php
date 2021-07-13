<?php

$id = $_POST['id'];
$id = (int)$id;

if(!$id) {
    die ("Что то пошло не так с удалением");
}

$deleted = Category::deleteById($id);

if ($deleted) {
    header('Location: /categories/list');
} else {
    die("Что-то пошло не так");
}