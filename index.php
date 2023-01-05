


<?php  include('header.php'); ?>



<?php 
session_start();

$members = [
  ["name" => "Mina","lastName" => "Atef", "age" => "21","birthOfDate" => "4/1/2000", "Salary" => 30000, "imgUrl" => "assets/images/6.jpg", "jobDescription" => "Web-Developer"],
  ["name" => "Mena", "lastName" => "Abdo", "age" => "21", "birthOfDate" => "6/23/2000", "Salary" => 50000, "imgUrl" => "assets/images/mena.jpg", "jobDescription" => "Electrical Engineer"],
  ["name" => "Maro", "lastName" => "Helmy", "age" => "17", "birthOfDate" => "12/26/2004", "Salary" => 40000, "imgUrl" => "assets/images/maro.jpg", "jobDescription" => "pharmacist"],
  ["name" => "Ramy", "lastName" => "Samir", "age" => "33", "birthOfDate" => "8/29/1985", "Salary" => 20000, "imgUrl" => "assets/images/ramy.jpg", "jobDescription" => "Manager"],
  ["name" => "Micheal", "lastName" => "Yousef", "age" => "32", "birthOfDate" => "3/12/1989", "Salary" => 100000, "imgUrl" => "assets/images/micheal.jpg", "jobDescription" => "businessman"],
  ["name" => "Yousef", "lastName" => "Victor", "age" => "19", "birthOfDate" => "5/22/2002", "Salary" => 40000, "imgUrl" => "assets/images/joo.jpg", "jobDescription" => "Tradding"],
  ["name" => "Toni", "lastName" => "Rafaat", "age" => "20", "birthOfDate" => "8/28/2001", "Salary" => 60000, "imgUrl" => "assets/images/toni.jpg", "jobDescription" => "W-eb-Develober"],
  ["name" => "Poula", "lastName" => "Rafaat", "age" => "18", "birthOfDate" => "8/25/2003", "Salary" => 30000, "imgUrl" => "assets/images/bebo.jpg", "jobDescription" => "Cio"],
  ["name" => "mina", "lastName" => "Victor", "age" => "23", "birthOfDate" => "3/6/1998", "Salary" => 50000, "imgUrl" => "", "jobDescription" => "Bank Manger"],
  ["name" => "Ibrahem", "lastName" => "Mohamed", "age" => "21", "birthOfDate" => "8/30/2000", "Salary" => 30000, "imgUrl" => "assets/images/ibr.jpg", "jobDescription" => "Graphic-Designer"],["name" => $_SESSION['first-name'] , "lastName" => $_SESSION['secound-name'], "age" => "21", "birthOfDate" => "8/30/2000", "Salary" => 30000, "imgUrl" => $_SESSION['getimage'], "jobDescription" => "Graphic-Designer"]

];


?>

    <h1 class="text-center mt-5">Hello php</h1>



  <?php 
  
  


      // 
      
      ?>
<div class="container my-5">
  <?php  
  ?>
  <div  class="alert alert-success <?php if($_SESSION['pass'] == ""){echo "d-none";} ?>">
    <p style="margin-bottom: 0px;"> <?= $_SESSION['pass'] ?> </p>
  </div>
    <table class="table mb-5 text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col">photo</th>
          <th scope="col">Name</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Salary</th>
          <th scope="col">job Description</th>
        </tr>
      </thead>
      <tbody>

<?php 

foreach($members as $m ) {?>



<tr>
  <td><img src="<?php if( $m['imgUrl'] == null){echo 'assets/images/unknown.png';}else{echo $m['imgUrl'];} ?>" alt="" class="img-fluid" width="40"></td>
  <td><?= $m['name']?></td>
  <td><?= $m['birthOfDate']?></td>
  <td><?= $m['Salary']?></td>
  <td><?= $m['jobDescription']?></td>
</tr>

<?php } ?>

      </tbody>
    </table>
</div>




<?php include 'footer.php';

