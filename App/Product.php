<?php

function get_product_list_count($connect) {
    $query = "SELECT COUNT(*) as c FROM products p LEFT JOIN category c ON  p.category_id = c.id";
    $ressult = query($connect, $query);

    $row = mysqli_fetch_assoc($ressult);
    return (int)($row['c'] ?? 0);

}

function get_product_list($connect, int $limit = 100, int $offset = 0) {
    $query = "SELECT p.*, c.name as category_name FROM products p LEFT JOIN category c ON  p.category_id = c.id LIMIT $offset, $limit";
    $result = query($connect, $query);


    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    return $products;

}

function get_product_by_id($connect, $id) {

    $query = "SELECT p.*, c.id AS category_id FROM products p LEFT JOIN category c ON  p.category_id = c.id WHERE p.id = $id";
    $result = query($connect, $query);

    $product = mysqli_fetch_assoc($result);
    if (is_null($product)) {
        $product = [];
    }

    return $product;
}

function get_product_list_by_category($connect, $category_id) {
    $query = "SELECT p.*, c.name as category_name FROM products p LEFT JOIN category c ON  p.category_id = c.id WHERE p.category_id = $category_id" ;
    $ressult = query($connect, $query);


    $products = [];
    while ($row = mysqli_fetch_assoc($ressult)) {
        $products[] = $row;
    }
    return $products;

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
    $category_id = $product['category_id'] ?? '';



    $query = "UPDATE products SET 
                name = '$name', 
                price = '$price',
                currency = '$currency',
                article = '$article',
                amount = '$amount',
                body = '$body',
                weight = '$weight',
                unitWeight = '$unitWeight',
                category_id = '$category_id'
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
    $category_id  = $product['category_id'] ?? '';



    $query = "INSERT INTO products (`name`, `price`, `currency`, `article`, `amount`, `body`, `weight`, `unitWeight`, `category_id`) VALUES ('$name', '$price', '$currency', '$article', '$amount', '$body', '$weight', '$unitWeight', '$category_id')";
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
        'unitWeight'    => $_POST['unitWeight'] ?? '',
        'category_id'   => $_POST['category_id'] ?? ''
    ];
}

