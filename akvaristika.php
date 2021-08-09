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
          <h1>Akvaristika</h1>
        </div>
        <div class="large-12 cell">
        
  <hr>
  <br>
  
  <br>
  <div class="callout pocetna">
  
<p>
Akvaristika je hobi gdje se bavi čuvanjem riba u kućnom akvarijumu.

Akvaristika je jedan od najstarijih ljudskih hobija.

Svoju popularnost je stekla zahvaljujući hobističkim bavljenjem akvarijumima i akvarijumskim životinjama i biljkama.
Zahvaljujući ljubavi prema akvaristici, ovaj hobi je postao izrazito popularan i rasprostranjen širom cijeloga svijeta.
Akvaristika je vezana za prirodne nauke: biologija, botanika, ihtiologija, ekologija, mikrobiologija, genetika, 
fizika, matematika, geografija, informatika. Zatim društvene nauke kao posebno 
zanimljive za akvaristiku: historija, psihologija, sociologija, pedagogija i ekonomija. 
A zbog vizualne privlačnosti akvaristika je potencijalni medij za umjetničko izražavanje. 
</p>     
<br>

Akvaristika se dijeli prema vrsti vode u kojoj se ribe čuvaju. Postoje tri tipa akvaristike:
<p> <br>
    1.Slatkovodna akvaristika <br>
    2.Morska akvaristika<br>
    3.Slankasta akvaristika<br>
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

 
