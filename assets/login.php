<?php
require_once('connection.php');
$user = $_POST['nome'];
$pass = $_POST['senha'];

if ($_POST['nome'] == '' || $_POST['senha'] == '') {
    header("Location: ../index.php");
} else {
    $iwquery = $conn->query("SELECT * FROM user WHERE username = '$user' AND password = '$pass'");

    foreach ($iwquery as $iw) {
        $usernameIn = $iw["username"];
        $passwordIn = $iw["password"];
    }

    if ($usernameIn == $user && $passwordIn == $pass) {
        session_start();
        $_SESSION['validation'] = 'AMSUb!982NG2';

        header("Location: ../product.php?currency=EUR");
    } else {
        header("Location: ../index.php");
    }
}