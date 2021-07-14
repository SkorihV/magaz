<?php
$productImageId = Requests::getIntFromPost('product_image_id', false);


if(!$productImageId) {
    die ("error что то пошло не так с удалением");
}
$deleted = Product::deleteById($productImageId);
die('ok');

//if ($deleted) {
//    Response::redirect('/products/list');
//} else {
//    die("Что-то пошло не так");
//}