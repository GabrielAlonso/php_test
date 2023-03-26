<?php
require '../vendor/autoload.php';

use \App\Entity\User;


$user = $_POST['nome'];
$pass = $_POST['senha'];

$obUser = User::getUser($user, $pass);

if ($_POST['nome'] == '' || $_POST['senha'] == '') {
    header("Location: ../index.php");
} else {

        $usernameIn = $obUser->username;
        $passwordIn = $obUser->password;


    if ($usernameIn == $user && $passwordIn == $pass) {
        session_start();
        $_SESSION['validation'] = 'AMSUb!982NG2';
        $_SESSION['username'] = $obUser->username;
        $_SESSION['id_user'] = $obUser->id;

        header("Location: ../product_page.php?currency=EUR");
    } else {
        header("Location: ../index.php");
    }
}