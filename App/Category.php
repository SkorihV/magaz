<?php

class Category {
    public static function getList() {
        $query = "SELECT * FROM category";
        return Db::fetchAll($query);
    }

    public static function getById($id) {
        $query = "SELECT * FROM category WHERE id = $id";
        return Db::fetchRow($query);
    }

    public static function updateById(int $id, array $category ) {
        if (isset($category['id'])) {
            unset($category['id']);
        }
        return Db::update("category", $category, "id = $id");

    }

    public static function add($category) {

        if (isset($category['id'])) {
            unset($category['id']);
        }
        return Db::insert("category", $category);

    }

    public static function deleteById($id) {
        return Db::delete("category", "id = $id");
    }

    public static function getFromPost() {
        return [
            'id'            => Requests::getIntFromPost('id', false),
            'name'          => Requests::getStrFromPost('name')
        ];
    }
}