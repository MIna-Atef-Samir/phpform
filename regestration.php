<?php include 'header.php';?>




<div class="container my-5">
  <div class="row">
    <div class="col-md-6 my-4">
      <img src="https://cdn.dribbble.com/users/1857592/screenshots/3848396/character-typing.gif" width="100%" alt="">
    </div>
    <div class="col-md-6 ml-auto">
      <form class="form_1" action="checkregester.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
            <label for="firstName">first name</label>
              <input name="firstname" id="firstName" type="text" class="form-control" placeholder="First name" required>
            </div>
            <div class="col">
            <label for="lastName">last name</label>
              <input name="lastname" id="lastName" type="text" class="form-control" placeholder="Last name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="emailrgest" type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp"  required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="passwordregest" type="password" class="form-control" id="exampleInputPassword1" required >
          </div>
          <div class="form-group">
            <label for="imaag" class="btn btn-dark">Add your Image</label>
            <input name="image" type="file" id="imaag" class="d-none" >
          </div>
          <button type="submit" class="btn btn-primary form-control">Submit</button>
      </form>
    </div>
  </div>
</div>









<?php include 'footer.php'; ?>