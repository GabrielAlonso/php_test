<?php
error_reporting(0);
use \App\Entity\Shop;

require __DIR__ . '.../../vendor/autoload.php';

$obShop = new Shop;

if (isset(
    $_POST["id_user"],
    $_POST["currency_type"],
    $_POST["total_price"],
    $_POST["id_prod"],
    $_POST["amount"]
)) {
    $obShop->user_id = $_POST["id_user"];
    $obShop->currency_type = $_POST["currency_type"];
    $obShop->total_price = $_POST["total_price"];
    $obShop->product_id = $_POST["id_prod"];
    $obShop->amount = $_POST["amount"];
    $obShop->insertShop();

    $obShop->sendEmail($_POST["email"]);

    http_response_code(200);
    print json_encode('OK');
}
