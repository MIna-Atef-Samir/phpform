
<?php 



session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == null || $password == null){
        header("Location:login.php");
        $_SESSION['error'] = "passowrd or email can't be empty";
    }else if($email == $_SESSION['getemail'] && $password == $_SESSION['getpassword']){
        
        $_SESSION['login'] = true;
        $_SESSION['pass'] = "login succesed!";
        header('Location:index.php');
    }else{
        
        $_SESSION['error'] = "passowrd or email didn't match";
        header("Location:login.php");
    }
}else{
    header("Location:login.php");
}




?>


