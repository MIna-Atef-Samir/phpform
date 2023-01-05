<?php include 'header.php'; ?>

<?php 



session_start();





?>

<div class="container my-5">
  <div class="alert alert-danger <?php if($_SESSION['error'] == ''){echo 'd-none'; } ?>">
    <p style="margin-bottom: 0px;"><?=$_SESSION['error']; ?></p>
  </div>
<form class="form_1 w-50 mx-auto" action="checklogin.php" method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" >
  </div>
  <button type="submit" class="btn btn-primary form-control">Submit</button>
  <br>
  <a href="regestration.php" class="btn btn-outline-dark form-control mt-3" style="text-decoration: none;">Sign Up</a>
</form>
</div>

















<?php
  include 'footer.php'; 


  $_SESSION['error'] = "";
?>