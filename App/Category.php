<?php

function get_category_list($connect) {
    $query = "SELECT * FROM category";
    $ressult = query($connect, $query);


    $categores = [];
    while ($row = mysqli_fetch_assoc($ressult)) {
        $categores[] = $row;
    }
    return $categores;

}

function get_category_by_id($connect, $id) {

    $query = "SELECT * FROM category WHERE id = $id";
    $result = query($connect, $query);

    $category = mysqli_fetch_assoc($result);
    if (is_null($category)) {
        $category = [];
    }

    return $category;
}

function update_category_by_id($connect, $id, $category ) {
    $id = $category['id'] ?? '';
    $name = $category['name'] ?? '';

    $query = "UPDATE category SET 
                name = '$name'
                WHERE id = $id";

    query($connect, $query);
    return mysqli_affected_rows($connect);

}

function add_category($connect, $category) {
    $name = $category['name'] ?? '';

    $query = "INSERT INTO category (`name`) VALUES ('$name')";
    query($connect, $query);
    return mysqli_affected_rows($connect);
}

function delete_pcategory_by_id($connect, $id) {
    $query = "DELETE FROM category WHERE id = $id";
    query($connect, $query);

    return mysqli_affected_rows($connect);
}

function get_category_from_post() {
    return [
        'id'            => $_POST['id'] ?? '',
        'name'          => $_POST['name'] ?? '',
    ];
}

