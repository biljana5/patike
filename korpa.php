<?php
include "Database.php";
$crud=new Database("bazapatike");    
session_start();
//echo $_SESSION["korisnickoime"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index korisnik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stilproizvodi.css" type="text/css">
    
   
    <link type="text/css" href="https://getbootstrap.com/1.0.0/assets/css/bootstrap-1.0.0.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   
    
   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">POČETNA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">O NAMA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">PROIZVODI</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">KONTAKT</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">KORPA</a>
        </li>
       
        <form class="form-inline my-2 my-lg-0" action="indexkorisnik.php" method="post">
        <?php
        if(isset($_SESSION["korisnickoime"])){
        echo $_SESSION["korisnickoime"];
       ?> 
       <button class="btn btn-outline-warning my-2 my-sm-0" name="logout" type="submit">LOG OUT</button>
         </form>



         <?php
        }
if(isset($_POST["logout"])){
   session_destroy();
		header("Location:index.php");
	}


?>


      </ul>
     
    </div>
  </nav> 

  <div class="rowpage">

  
</div>






<div class="footer">

<div class="row">
<ul class="social-media">  
<li class="mreze"><img class="image" src="slike/face.png" alt=""></li>
<li class="mreze"><img class="image" src="slike/insta.png" alt=""></li>
<li class="mreze"><img class="image" src="slike/twitter1.png" alt=""></li>
<li class="mreze"><img class="image" src="slike/phone.png" alt=""></li>
<li class="mreze"><img class="image" src="slike/location.png" alt=""></li>
<li class="mreze"><img class="image" src="slike/youtube1.png" alt=""></li>
</ul>
</div>
<div class="row1 text-center" >
  <h6>Jove Ilića 154, 11000 Beograd</h6>
  <h6>+381 11 3950 823</h6>
</div>


</body>
</html>