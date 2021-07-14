<?php

if (Requests::isPost()) {

    $product = Product::getFromPost();
    $productId = Product::add($product);

    $uploadImages = $_FILES['images'] ?? [];
    $imageNames = $uploadImages['name'];
    $imageTmpNames = $uploadImages['tmp_name'];

    $path = APP_UPLOAD_PRODUCTS_DIR . '/' . $productId;

    if (!file_exists($path)) {
        mkdir($path);
    }

    for ($i = 0; $i < count($imageNames); $i++) {
        $imageName = basename($imageNames[$i]);
        $imageTmpName = $imageTmpNames[$i];

        $imagePath = $path . '/' . $imageName;
        move_uploaded_file($imageTmpName, $imagePath);

        ProductImage::add([
            'product_id' => $productId,
            'name' => $imageName,
            'path' => str_replace(APP_PUBLIC_DIR , '', $imagePath)
        ]);
    }

//    exit;




    if ($productId) {
        Response::redirect('/products/list');
    } else {
        die("Что-то пошло не так");
    }
}

$categories = Category::getList();
$smarty->assign("categories", $categories);
$smarty->display( 'products/add.tpl');
