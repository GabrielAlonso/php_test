<?php
session_start();
$_SESSION['validation'] = '';
unset($_SESSION['validation']);
header('Location: ../index.php');