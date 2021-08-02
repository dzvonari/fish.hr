<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);

$proizvod = (object)$_POST;
$proizvod->sifra = count($_SESSION['proizvodi'])+1;
$_SESSION['proizvodi'][]=$proizvod;

header('location:index.php');