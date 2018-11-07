<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aninfo - <?=(isset($_GET['page'])?$_GET['page']:'Home');?></title>

    <!--css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

    <!--javascript-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!--
    Template name : Aninfo v1.0
    Don't leach it!
    <><><><><<><>
    Project UAS Web Lanjutan

    Denny - 1519240024
    -->
  </head>
  <body>
  <?php
  if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
  }
  ?>
  <!--navbar menu-->
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Aninfo</a>
    <span class="navbar-text" style="color:white">
      <?php
      if(isset($_SESSION['user-session'])){
        echo "Hello, ".$_SESSION['user-session']." ";
        echo " <a class='btn-primary' href='?logout'>[ Logout ]</a>";
      }else{
      ?>
      <a href='?page=login' class='btn btn-primary'>Sign In</a>
      <a href='?page=register' class='btn btn-primary'>Sign Up</a>
    <?php } ?>
    </span>
  </nav>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" href="http://localhost/aninfo">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=home-admin">List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=faq">FAQ</a>
    </li>
  </ul>

  <!--body-->
  <div id="body">
