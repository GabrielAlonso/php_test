<?php
session_start();
$_SESSION['validation'] = '';
$_SESSION['username'] = '';
unset($_SESSION['validation']);
unset($_SESSION['username']);
header('Location: ../index.php');