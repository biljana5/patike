<!DOCTYPE html>
<?php
include "Database.php";
$crud=new Database("bazapatike");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$rezultatapostrani=3;
$sql="SELECT * FROM proizvodi";
$crud->select2($sql);
$brojrezultata=$crud->getResult()->num_rows;
/*while ($row = $crud->getResult()->fetch_object()) {
echo $row->idproizvoda . " ". $row->naziv . '<br>';
}*/
echo '<br>';
echo $brojstrana=ceil($brojrezultata/$rezultatapostrani);

echo '<br>';
if(!isset($_GET["strana"])){
$strana=1;
}else{
    $strana=$_GET["strana"];
}

echo '<br>';
echo $brojod=($strana-1)*$rezultatapostrani;


echo '<br>';
$sql="SELECT * FROM proizvodi LIMIT " . $brojod . ',' . $rezultatapostrani;
$crud->select2($sql);
while ($row = $crud->getResult()->fetch_object()) {
    echo $row->idproizvoda . " ". $row->naziv . '<br>';
    }


for($strana=1;$strana<=$brojstrana;$strana++){
echo '<a href="proba.php?strana=' . $strana . '">' . $strana . '</a> ';

}


?>




</body>
</html>