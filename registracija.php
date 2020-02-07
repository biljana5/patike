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
    <title>Registruj se</title>

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="stil.css" type="text/css">
</head>
<body>
    




<div  id="page-container">
<div class="container" style="padding-top:80px; padding-left:700px; padding-bottom:20px">

<form action="registracija.php?" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput" style="color:white">IME</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="ime" placeholder="Ime"  style="width:120mm">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="color:white">PREZIME</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="prezime" placeholder="Prezime"  style="width:120mm">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="color:white">E-MAIL</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="E-mail"  style="width:120mm">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" style="color:white">KORISNIČKO IME</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="korisnickoime" placeholder="Korisničko ime"  style="width:120mm">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" style="color:white">PASSWORD</label>
    <input type="password"  class="form-control" id="exampleInputPassword1"  name="password" style="width:120mm">
  </div>
 
  <button type="submit" name="registrujse" class="btn btn-primary" style="background:#e8662a; border:#e8662a">REGISTRUJ SE</button>

</form>

<?php
if(isset($_POST["registrujse"]))
 {
 
  $podaci=array($_POST["ime"], $_POST["prezime"], $_POST["email"],$_POST["korisnickoime"],$_POST["password"], 1);
    
  if ($crud->insert("korisnik", "ime, prezime, email, korisnickoime, sifra, uloga",$podaci)){
  $_SESSION["korisnickoime"]=$_POST["korisnickoime"];
  header("Location:indexkorisnik.php");
  echo "Uspesno ubacivanje";
  } else
  echo "Greska prilikom ubacivanja";

}



?>


</div>



</div>


</body>
</html>