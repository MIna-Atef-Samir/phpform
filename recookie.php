<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $color = $_POST['color'];
    setcookie('divColor', $color, time() + 3600);
    //$_COOKIE['divColor'];
    header('Location:cookie.php');
}