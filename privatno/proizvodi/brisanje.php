<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);

for($i=0;$i<count($_SESSION['proizvodi']);$i++){
    $proizvod = $_SESSION['proizvodi'][$i];
    if($proizvod->sifra==$_GET['sifra']){
        unset($_SESSION['proizvodi'][$i]);
        break;
    }
}

header('location: index.php');