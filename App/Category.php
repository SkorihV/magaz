<?php

class Category {
    public static function getList() {
        $query = "SELECT * FROM category";
        $ressult = Db::query($query);


        $categores = [];
        while ($row = mysqli_fetch_assoc($ressult)) {
            $categores[] = $row;
        }
        return $categores;
    }

    public static function getById($id) {
        $query = "SELECT * FROM category WHERE id = $id";
        $result = Db::query($query);

        $category = mysqli_fetch_assoc($result);
        if (is_null($category)) {
            $category = [];
        }

        return $category;
    }

    public static function updateById($id, $category ) {
        $id = $category['id'] ?? '';
        $name = $category['name'] ?? '';

        $query = "UPDATE category SET 
                name = '$name'
                WHERE id = $id";

        Db::query($query);
        return Db::affectedRows();
    }

    public static function add($category) {
        $name = $category['name'] ?? '';

        $query = "INSERT INTO category (`name`) VALUES ('$name')";
        Db::query($query);
        return Db::affectedRows();
    }

    public static function deleteById($id) {
        $query = "DELETE FROM category WHERE id = $id";
        Db::query($query);

        return Db::affectedRows();
    }

    public static function getFromPost() {
        return [
            'id'            => $_POST['id'] ?? '',
            'name'          => $_POST['name'] ?? '',
        ];
    }

}

