<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Product;

$result = '';

$products = Product::getProducts();

foreach ($products as $product) {

    $result .= '<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">' . $product->name . '</h4>
        </div>
        <div class="card-body">
            <h2 class="card-title pricing-card-title">' . Product::getCurrency($product->price_in_eur) . '</h2>
                <img class="img-product" src="img/' . $product->img . '">                              
            <p class="mt-3">Description</p>
            <a href="payment_page.php?currency=' . $_GET['currency'] . '&id=' . $product->id . '">
                <button type="button" class="w-100 btn btn-lg btn-outline-success">Add to Cart</button>
            </a>
        </div>
    </div>
    </div>';
}


if ($_SESSION['validation'] == 'AMSUb!982NG2') {
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
                echo $result;
                ?>
            </div>
        </main>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>

    </html>

<?php
} else {
    header('Location: index.php');
}
?>