<?php


class ProductImage
{
    public static function getById($id) {
        $query = "SELECT * FROM product_images  WHERE id = $id";
        return Db::fetchRow($query);
    }

    public static function findByFileNameInProduct(int $productId, string $fileName)
    {
        $query = "SELECT * FROM product_images  WHERE product_id = $id AND name = $fileName";
        return Db::fetchRow($query);
    }

    public static function updateById (int $id, array $productImage )
    {
        if (isset($category['id'])) {
            unset($category['id']);
        }
        return Db::update("product_images", $productImage, "id = $id");

    }

    public static function add(array $productImage): int
    {
        if (isset($productImage['id'])) {
            unset($productImage['id']);
        }
        return Db::insert("product_images", $productImage);
    }

    public static function deleteById(int $id) {
        return Db::delete('product_images', "id = $id");
    }

    public static function deleteByProductId(int $productIs)
    {
        return Db::delete('product_images', "product_id = $productIs");
    }

//    public static function getFromPost(){
//        return [
//            'id'            => Requests::getIntFromPost('id', false),
//            'name'          => Requests::getStrFromPost('name'),
//            'price'         => Requests::getIntFromPost('price'),
//            'currency'      => Requests::getStrFromPost('currency'),
//            'article'       => Requests::getStrFromPost('article'),
//            'amount'        => Requests::getIntFromPost('amount'),
//            'body'          => Requests::getStrFromPost('body'),
//            'weight'        => Requests::getIntFromPost('weight'),
//            'unitWeight'    => Requests::getStrFromPost('unitWeight'),
//            'category_id'   => Requests::getIntFromPost('category_id')
//        ];
//    }
    public static function getListByProductId(int $productId)
    {
        $query = "SELECT * FROM product_images WHERE product_id = $productId";
        return Db::fetchAll($query);
    }

}