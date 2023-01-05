<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['emailrgest'];
$password = $_POST['passwordregest'];
$image = $_FILES['image'];
// $try = $_SERVER['REQUEST_METHOD'];

$r = rand();
$t = time();
$imagename = $_FILES['image']['name'] ;
$imagetype = $_FILES['image']['type'];
$imagesize = $_FILES['image']['size'];
$imagelocaction = $_FILES['image']['tmp_name'];


$newname = $r . $t. $imagename;
$newloc = "images/$newname";
move_uploaded_file($imagelocaction ,$newloc );

session_start();

$_SESSION['first-name'] = $firstname ;
$_SESSION['secound-name'] = $lastname ;
$_SESSION['getimage'] = $newloc ;
$_SESSION['getemail'] = $email;
$_SESSION['getpassword'] = $password ;


header('Location: login.php');
?>

<h1><?=$imagename?></h1>
<img src="<?=$newloc?>" width="200" alt="">


