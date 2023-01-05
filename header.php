<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#" >PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item <?= ($activePage == 'login') ? 'active':''; ?>">">
        <a class="nav-link" href="login.php">login</a>
      </li>
      <li class="nav-item <?= ($activePage == 'regestration') ? 'active':''; ?>">">
        <a class="nav-link" href="regestration.php">registration</a>
      </li>
      <li class="nav-item <?= ($activePage == 'cookie') ? 'active':''; ?>">">
        <a class="nav-link" href="cookie.php">cookie</a>
      </li>
      <li class="nav-item">">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</nav>