<?php

function get_product_list($connect) {
    $query = "SELECT * FROM products";
    $ressult = query($connect, $query);


    $products = [];
    while ($row = mysqli_fetch_assoc($ressult)) {
        $products[] = $row;
    }
    return $products;

}

function get_product_by_id($connect, $id) {

    $query = "SELECT * FROM products WHERE id = $id";
    $result = query($connect, $query);

    $product = mysqli_fetch_assoc($result);
    if (is_null($product)) {
        $product = [];
    }

    return $product;
}

function update_product_by_id($connect, $id, $product ) {
    $id = $product['id'] ?? '';
    $name = $product['name'] ?? '';
    $price = $product['price'] ?? '';
    $currency = $product['currency'] ?? '';
    $article = $product['article'] ?? '';
    $amount = $product['amount'] ?? '';
    $body = $product['body'] ?? '';
    $weight = $product['weight'] ?? '';
    $unitWeight = $product['unitWeight'] ?? '';


    $query = "UPDATE products SET 
                name = '$name', 
                price = '$price',
                currency = '$currency',
                article = '$article',
                amount = '$amount',
                body = '$body',
                weight = '$weight',
                unitWeight = '$unitWeight'
                WHERE id = $id";

    query($connect, $query);
    return mysqli_affected_rows($connect);

}

function add_product($connect, $product) {
    $name = $product['name'] ?? '';
    $price = $product['price'] ?? '';
    $currency = $product['currency'] ?? '';
    $article = $product['article'] ?? '';
    $amount = $product['amount'] ?? '';
    $body = $product['body'] ?? '';
    $weight = $product['weight'] ?? '';
    $unitWeight = $product['unitWeight'] ?? '';

    $query = "INSERT INTO products (name, price, currency, article, amount, body, weight, unitWeight) VALUES ('$name', '$price', '$currency', '$article', '$amount', '$body', '$weight', '$unitWeight')";
    query($connect, $query);

    return mysqli_affected_rows($connect);
}

function delete_product_by_id($connect, $id) {
    $query = "DELETE FROM products WHERE id = $id";
    query($connect, $query);

    return mysqli_affected_rows($connect);
}

function get_product_from_post() {
    return [
        'id'            => $_POST['id'] ?? '',
        'name'          => $_POST['name'] ?? '',
        'price'         => $_POST['price'] ?? '',
        'currency'      => $_POST['currency'] ?? '',
        'article'       => $_POST['article'] ?? '',
        'amount'        => $_POST['amount'] ?? '',
        'body'          => $_POST['body'] ?? '',
        'weight'        => $_POST['weight'] ?? '',
        'unitWeight'    => $_POST['unitWeight'] ?? ''
    ];
}

