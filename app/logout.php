<?php
session_start();
$_SESSION['validation'] = '';
$_SESSION['username'] = '';
$_SESSION['id_user'] = '';
unset($_SESSION['validation']);
unset($_SESSION['username']);
unset($_SESSION['id_user']);
header('Location: ../index.php');