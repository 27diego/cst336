<?php
session_start();
if(!isset($_SESSION['shoppingCart'])) {
    $arr = array();
    array_push($arr, $_GET['val']);
    array_push($arr, $_GET['val2']);
    $_SESSION['shoppingCart'] = $arr;
}
else {
    $arr = array();
    $arr = $_SESSION['shoppingCart'];
    array_push($arr, $_GET['val']);
    array_push($arr, $_GET['val2']);
    $_SESSION['shoppingCart'] = $arr;
}
header('Location: catalog.php');
?>