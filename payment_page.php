<?php
require_once('assets/connection.php');
require_once('assets/functions.php');
$id = $_GET['id'];
$stmt = "SELECT * FROM product WHERE id = ".$id." LIMIT 1";

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
        <div class="row row-cols-md-2 mb-3 text-center">

            <?php

            //$currNumber = new CurrencyClass();

            
            foreach ($conn->query($stmt) as $row) {
  
            echo '<div class="col-md-7 col-lg-8">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">

                        <img class="img-product-total" src="img/' . $row['img'] . '">        
                    
                </div>
            </div>
            </div>

            

            <div class="col-md-4 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">1</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">'.$row['name'].'</h6>
                            <small class="text-muted">'.$row['description'].'</small>
                        </div>
                        <span class="text-muted">'.$row['price_in_eur'].'</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-around">
                        <button type="button" class="btn-prod btn btn-lg btn-danger">-</button>
                        <button type="button" class="btn-prod btn btn-lg btn-primary">+</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>'.$row['price_in_eur'].'</strong>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#confirmedPaymentModal" class="w-100 btn btn-lg btn-outline-success">Buy</button>
                    </li>
                </ul>
            </div>';
        }
            ?>
        </div>
        <?php require_once('confirmed_payment.php'); ?>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>