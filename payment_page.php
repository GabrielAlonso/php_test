<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Product;

error_reporting(0);

if ($_SESSION['validation'] == 'AMSUb!982NG2') {

    $result = '';
    $products = Product::getProducts("id=" . $_GET['id']);

    foreach ($products as $product) {
        $result .= '<div class="col-md-7 col-lg-8">
        <div class="card mb-4 rounded-3 shadow-sm">
            <input type="hidden" id="id_prod" value="' . $product->id . '">
            <div class="card-body">
                    <img class="img-product-total" src="img/' . $product->img . '">        
            </div>
        </div>
        </div>     
        <div class="col-md-4 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span id="display_total" class="badge bg-primary rounded-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">' . $product->name . '</h6>
                        <small class="text-muted">' . $product->description . '</small>
                    </div>
                    <span class="text-muted"><div id="total_pr">' . Product::getCurrency($product->price_in_eur) . '</div></span>
                </li>
                <li class="list-group-item d-flex justify-content-around">
                    <button type="button" onclick="addCart(this.id)" id="less_prod" class="btn-prod btn btn-lg btn-danger">-</button>
                    <button type="button" onclick="addCart(this.id)" id="plus_prod" class="btn-prod btn btn-lg btn-primary">+</button>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong><div id="total_price"></div></strong>
                </li>
                <li class="list-group-item p-2 d-flex flex-column align-items-start">
                    <label class="txt-align-left w-100" for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" />  
                </li>                
                <li class="list-group-item d-flex justify-content-between">
                    <button type="button" onclick="send_shop()" class="w-100 btn btn-lg btn-outline-success">Buy</button>
                </li>
            </ul>
        </div>';
    }

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
            <input type="hidden" id="id_user" value="<?php echo $_SESSION['id_user'] ?>">
            <div class="row row-cols-md-2 mb-3 text-center">

                <?php
                echo $result;
                ?>
            </div>
            <?php require_once('confirmed_payment.php'); ?>
        </main>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/script_pay.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location: index.php');
}
?>