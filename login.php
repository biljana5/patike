<!DOCTYPE html>
<?php
include "Database.php";
$crud=new Database("bazapatike");
    
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="stil.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>






</head>
<body>
    


<div  id="page-container">
 <div class="container" style="padding-top:180px; padding-left:120px">
  <form action="login.php"  method="post">
   <div class="form-group">
    <label for="exampleInputEmail1" style="color:white">KORISNIČKO IME</label>
    <input type="text" class="form-control" name="korisnickoime" aria-describedby="emailHelp" style="width:100mm">
   </div>
   <div class="form-group">
    <label for="exampleInputPassword1" style="color:white">PASSWORD</label>
    <input type="password"  class="form-control" name="password" style="width:100mm">
   </div>
    <button type="submit" name="ulogujse"class="btn btn-primary" style="background:#e8662a; border:#e8662a">ULOGUJ SE</button>
  </form>
 


<?php
if(isset($_POST["ulogujse"])){

  $ime=$_POST["korisnickoime"];
  $password=$_POST["password"];

$sql="SELECT * FROM korisnik WHERE korisnickoime='$ime' AND sifra='$password'";
$crud->select2($sql);

if ($row=$crud->getResult()->num_rows==null) {
  echo '<div class="alert alert-danger">Proverite da li ste lepo uneli korisničko ime ili šifru!</div>';
} else {
 // $_SESSION["login"]="go";
  while ($row = $crud->getResult()->fetch_object()) {
  $_SESSION['korisnickoime'] = $row->korisnickoime;
  
  //header("Location:indexkorisnik.php");
  

  if ($row->uloga == 1) {
      header("Location:indexkorisnik.php");
  } else {
      header("Location:indexadmin.php");
    
  }
 }
}
}
?>

</div>
</div>

</body>
</html>