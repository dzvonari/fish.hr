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
        <div class="large-6 cell">
<h1>O nama</h1>
<hr>
         <div class="callout pocetna">
<p>O nama <br>
Fish app. je aplikacija namjenjena unosu proizvoda u web shop hrane i opreme za ribice i ostale gmazove. Trudit ćemo se da na našem webu  
nađete sve potrebno  Vašem ljubimcu.
<hr>

<hr>
</div>
        </div>
<div class="large-6 cell">
        <h1> <br>   </h1>
        <hr>
   <div class="callout pocetna">
<p> <br>
Za sve dodatne informacije s povjerenjem nam se obratite:
  <hr>
  


Sjedište:<br>
 Adresa: Ul. dr. Luje Naletilića 1, 10000, Zagreb<br>
 Telefon: 011/111-111<br>
 Email: fish@fish.hr <br>
 Radno vrijeme
Svaki dan –  24:00
</p>
</div>
     </div>

    

<!doctype html>
<html class="no-js" lang="en">

  <head>
  <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nama</title>
    <link rel="stylesheet" href="assets/css/foundation.css">

 
    

    
    

  <?php require_once 'predlozak/head.php'; ?>

</div>
</div>  
  </head>

<body>    
<body style="background-image: url(fishh.png);">

    <?php require_once 'predlozak/podnozje.php'; ?>
   
    <?php require_once 'predlozak/javascript.php'; ?>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<?php require_once 'predlozak/podnozje.php'; ?>
    </div>
    <?php require_once 'predlozak/javascript.php'; ?>
    
</body>
</html>

 
