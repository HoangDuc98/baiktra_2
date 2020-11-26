<?php

require "controller/ProductController.php";
require "model/DB.php";
require "model/ProductDB.php";
require "model/Product.php";

use Project\model\ProductController;

$controller = new ProductController();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Product Management</title>
</head>
<body>
<div class="container">
    <a href="./index.php">Product Management</a>
    <?php
    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;

    switch ($page) {
        case "add":
            $controller->add();
            break;
        case "edit":
            $controller->edit();
            break;
        case "delete":
            $controller->delete();
            break;
        default:
            $controller->directionalSearchAndIndex();
    }
    ?>
</div>

</body>
</html>
