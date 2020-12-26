<?php

namespace App\Models;

use App\Config\Database;
use function App\Traits\GenerateUuid;

class Product extends Database {


    public function getAllProducts() {
        return $this->connect->query("SELECT * FROM products ORDER BY products.created_at ASC");
    }

    public function getProductsByID($id) 
    {
        return $this->connect->query("SELECT * FROM products WHERE id = $id");
    }

    public function createNewProducts($product_name, $description, $price, $stock)
    {
        $uuid       = new GenerateUuid;
        // $created_at = date('Y-m-d H:i:s', time());

        return $this->connect->query("INSERT INTO products (uuid, product_name, description, price, stock) 
            VALUES ('$uuid', '$product_name', '$description', '$price', '$stock') ");

    }

    public function updateProductByID($id, $product_name, $description, $price, $stock) 
    {
        $getProduct = $this->getProductsByID($id);

        if(!$getProduct) return "Couldn't find product";

        return $this->connect->query("UPDATE products SET product_name = '$product_name', description = '$description', price = '$price', stock = '$stock' WHERE id = $id ");
    }

    public function deleteProductByID($id)
    {
       try {

            return $this->connect->query("DELETE FROM products WHERE id = $id");

       } catch(Exception $error) {

           return "Failed to delete product" . $error->getMessage();
           
       }
    }
}