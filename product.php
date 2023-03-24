<?php
error_reporting(0);
require_once('assets/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Online Shopping</title>
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <?php require_once('header.php'); ?>

    <main class="container py-3">
        <h2>Products</h2>
        <div class="row row-cols-1 row-cols-md-5 mb-3 text-center">
            <?php

            $value_price = '';
            $stmt = "SELECT * FROM product";
            foreach ($conn->query($stmt) as $row) {

                if ($_GET['currency'] == 'USD') {
                    $value_price = "$ " . number_format((1.08 * $row['price_in_eur']),2);
                } else if($_GET['currency'] == 'BRL') {
                    // Integration with some API currency converter
                    $value_price = "R$ " . number_format((5.70 * $row['price_in_eur']),2,",",".");
                } else {
                    // Integration with some API currency converter
                    $value_price = number_format($row['price_in_eur'],2,",",".") . " €";
                    
                }

                echo '<div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">' . $row['name'] . '</h4>
                            </div>
                            <div class="card-body">

                                <h2 class="card-title pricing-card-title">' . $value_price . '</h2>
                                    <img class="img-product" src="img/' . $row['img'] . '">                              
                                <p class="mt-3">Description</p>
                                <a href="payment_page.php?currency='.$_GET['currency'].'&id='.$row['id'].'"><button type="button" class="w-100 btn btn-lg btn-outline-success">Add to Cart</button></a>
                            </div>
                        </div>
                        </div>';
            }

            ?>

        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>