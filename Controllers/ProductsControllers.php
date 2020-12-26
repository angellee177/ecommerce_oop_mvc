<?php

namespace App\Controllers;

use App\Models\Product;
use function App\Traits\Response;

session_start();

class ProductsControllers 
{
    public function __construct() {
        $this->product = new Product;
    }

    // public handleRequest() {

    // }

    public function index()
    {
        return $this->product->getAllProducts();
    }

    public function findProduct($id)
    {
        $result = $this->product->getProductsByID($id);
        
        return $result ? $this->success("Data Successfully Retrieved", $result) : $this->fail("Failed to get Data.");
    }

    public function store()
    {
        if(isset($_POST['save_product'])) {
            $product_name = $_POST['product_name'];
            $description  = $_POST['description'];
            $price        = $_POST['price'];
            $stock        = $_POST['stock'];
            
        
            $result = $this->product->createNewProducts($product_name, $description, $price, $stock);
            
            return $result ? $this->success("Successfully Create new Product", $result) : $this->fail("Failed to create new Product");
        }
    }

    public function update()
    {
        $id = $_POST['id'];
        $product_name = $_POST['name'];
        $description  = $_POST['description'];
        $price        = $_POST['price'];
        $stock        = $_POST['stock'];

        $result = $this->product->updateProductByID($id, $product_name, $description, $price, $stock);

        return $result ? $this->success("Successfully Update Product", $result) : $this->fail("Failed to Updated Product");
    }

    public function delete()
    {
        $id     = $_GET['delete'];
        $result = $this->product->deleteProductByID($id);

        return $result ? $this->success("Successfully Delete Product", $result) : $this->fail("Failed to delete Product");
    }
    
}