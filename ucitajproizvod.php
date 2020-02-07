<div class="row">
 <div class="vl"></div>

                    
            <?php
           $rezultatapostrani=3;
           $sql="SELECT * FROM proizvodi";
           $crud->select2($sql);
           $brojrezultata=$crud->getResult()->num_rows;
           if(!isset($_GET["strana"])){
            $strana=1;
            }else{
                $strana=$_GET["strana"];
            }
           
            $brojstrana=ceil($brojrezultata/$rezultatapostrani);
            
           $brojod=($strana-1)*$rezultatapostrani;
           $sql="SELECT * FROM proizvodi LIMIT " . $brojod . ',' . $rezultatapostrani;
            $crud->select2($sql);
           
               
            while($red=$crud->getresult()->fetch_object()){
            ?>
          
            <div col-md-1>
    <div class="card" style="width: 18rem;">
        <img src=<?php echo $red->slika?> class="card-img" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $red->naziv?></h5>
        <p class="card-text"><?php echo $red->tip?></p>
        <div class=row>
        <p>Cena: <?php echo $red->cena?> RSD</p>
        <a href="#" class="btn btn-primary" style="background-color:#e8662a; border:#e8662a">Kupi</a>
        </div>
        </div>
    </div>
    </div>
  
    <div class="vl"></div>
    <?php
    }
    ?>
     </div>

     <nav aria-label="Page navigation example">
  <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
   <?php
     for($strana=1;$strana<=$brojstrana;$strana++){
    ?>
   <li class="page-item">
   <?php
    echo '<a class="page-link" href="indexkorisnik.php?strana=' . $strana . '">' . $strana . '</a> ';
 
   ?>
    </li>
    
     <?php
     }
     ?>
 <li class="page-item"><a class="page-link" href="#">Next</a></li>
 </ul>
</nav>