<?php 
    define('BASE_URL', 'http://localhost/'); // define root url
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/Assets/style/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Simple Ecommerce OOP MVC</title>
</head>
<body>
    <?php include '../Layouts/header.php' ?>
    <div class="container">
        <h2>Just an simple Ecommerce that implement Object Oriented Programming with MVC</>
        <br>
        <a href="<?php echo BASE_URL; ?>/Views/Product/list.php">Back to Index</a>
        <br>
        <br>
        <h3>Add new Product</h3>
        <hr>
        <div class="row justify-content-center">
            <form action="<?php echo BASE_URL; ?>/index.php?" method= "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="What's your product name?" required>
                </div>
                <div class="form-group">
                    <label for="product_description">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Describe your product here." required>
                </div>
                <div class="from-group">
                    <label for="product_price">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="How much price is it?" required>
                </div>
                <div class="form-group">
                    <label for="product_stock">Product Stock</label>
                    <input type="text" name="stock" class="form-control" placeholder="How much stock that you have?" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger btn-block" name="save_product">Add new Product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>