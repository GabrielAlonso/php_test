<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Shop;

$result = '';

$shopping = Shop::getShop("user_id=" . $_SESSION['id_user']);

if (!empty($shopping)) {
    foreach ($shopping as $shop) {

        $result .= '<tr>
                        <td>' . $shop->currency_type . '</td>
                        <td>' . $shop->amount . '</td>
                        <td>' . $shop->total_price . '</td>
                        <td>' . $shop->date_shop . '</td>
                    </tr>';
    }
} else {
    $result = '<tr><td class="text-center" colspan="4">No records found</td></tr>';
}

if ($_SESSION['validation'] == 'AMSUb!982NG2') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Shopping - Online Shopping</title>
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
        <?php require_once('header.php'); ?>

        <main class="container py-3">
            <div class="d-grid gap-2 d-md-flex justify-content-end">
                <a href="product_page.php?currency=<?php echo $_GET['currency'] ?>">
                    <button type="button" class="btn btn-sm btn-primary">Back</button>
                </a>
            </div>
            <h2>My Shopping</h2>
            <div class="row row-cols-1 row-cols-md-5 mb-3 text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Currency</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Date Shop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo $result;
                        ?>
                    </tbody>
                </table>

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