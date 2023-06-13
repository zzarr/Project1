<?php
session_start();
$id = $_GET['id'];
$qty = 1;

if ($_SESSION['cart'][$id]) {
    $qty = $_SESSION['cart'][$id]['qty'] + 1;
}

$item = [
    'id' => $id,
    'qty' => $qty
];

$_SESSION['cart'][$id] = $item;

header('location:cart.php');
