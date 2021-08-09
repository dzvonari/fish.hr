<?php require_once 'konfiguracija.php'; 
if(isset($_SESSION['autoriziran'])){
    header('location:' . $putanjaAplikacije . 'privatno/nadzornaploca.php');
    exit;
}
?>
<?php
require_once 'mobile/Mobile_Detect.php';
require_once 'izbornik.php';
?>
<div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          


     
          <h2>Dobrodošli u aplikaciju FISH APP
          
          </h2>
            </div>
        <div class="large-12 cell">

      
           <p><i>Molimo Vas upišite Email i Lozinku za prijavu</i></p> <br>

           
           <?php

           

           echo 'Email i lozinke u svrhu vježbe:','<br>';
           
           echo  'Email-1 <b>edunova</b>','  &gt ','Lozinka <b>e</b>','<br>'; 
           
           echo  'Email-2 <b>tomislav@fish.hr</b>',' &gt ','Lozinka <b>t</b>';
          

    ?> 
         
        </div>
      </div>
     </div>

<!doctype html>
<html class="no-js" lang="en">

  <head>
  <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FISH</title>

   
    <link rel="stylesheet" href="assets/css/foundation.css">


  <?php require_once 'predlozak/head.php'; ?>
  <div class="callout pocetna">
            <form action="<?php echo $putanjaAplikacije; ?>autorizacija.php" method="post">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <label for="lozinka">Lozinka</label>
                <input type="password" name="lozinka" id="lozinka">
                <input type="submit" value="Logiraj se">
            </form>

            
            
            
            <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
         
        </div>
        <div class="large-12 cell">
         
        </div>
<div>

    

</div>


</div>  
  </head>
<body>    

      </div>   
            </div>
          </div>               
      </div>
   


    </div>
    <?php require_once 'predlozak/podnozje.php'; ?>
    </div>
    <?php require_once 'predlozak/javascript.php'; ?>





  

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
