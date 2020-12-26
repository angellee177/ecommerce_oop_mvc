<?php 
    define('BASE_URL', 'http://localhost/');
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
        <div class="row" style="margin-top: 40px">
            <div class="col-md-2">
            </div>
            <div class="col-md-3">
                <h4>Author Detail</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-3">
                <a href="<?php echo BASE_URL; ?>/Views/Product/edit.php?edit=<?php echo "hello"; ?>" class="btn btn-info">Edit</a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo BASE_URL; ?>/Controllers/ProductsControllers.php?delete=<?php echo "hello"; ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
            <a href="../author/index.php" class="btn btn-primary">Back to Author List</a>
            </div>
        </div>
    </div>
</body>
</html>