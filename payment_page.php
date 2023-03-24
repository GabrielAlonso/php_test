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

            $i = 1;

            echo '<div class="col-md-7 col-lg-8">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Wine ' . ($i + 1) . '</h4>
                </div>
                <div class="card-body">

                    <h1 class="card-title pricing-card-title">$100.00</h1>
                        <img class="img-product" src="img/wine_' . ($i + 1) . '.png">                              
                    <p class="mt-3">Description</p>
                    
                </div>
            </div>
            </div>';

            ?>

            <div class="col-md-4 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">1</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#confirmedPaymentModal" class="w-100 btn btn-lg btn-outline-success">Buy</button>
                    </li>
                </ul>
            </div>
        </div>
        <?php require_once('confirmed_payment.php');?>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>