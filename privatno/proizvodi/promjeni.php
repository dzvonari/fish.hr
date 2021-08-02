<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);

$proizvod = (object)$_POST;

for($i=0;$i<count($_SESSION['proizvodi']);$i++){
    $s = $_SESSION['proizvodi'][$i];
    if($s->sifra==$proizvod->sifra){
        $_SESSION['proizvodi'][$i]=$proizvod;
        break;
    }
}

header('location: index.php');