<?php

require_once 'konfiguracija.php';
require_once 'mobile/Mobile_Detect.php';

//logiranje($_POST);
//logiranje($korisnici);

$postoji=false;
foreach($korisnici as $email=>$lozinka){
    if($email===$_POST['email'] && $lozinka===$_POST['lozinka']){
        $postoji=true;
        break;
    }
}



if($postoji){
    $_SESSION['autoriziran']=$_POST['email'];

    $niz=[];
    $s=new stdClass();
    $s->sifra=1;
    $s->naziv='akvarij 240L';
    $s->garancija='12 mjeseci';
    $s->cijena=3999.99;
    $s->oblik='četvrtasti';
    $s->robnamarka='Juwel';
    $s->boja='crna';

    $niz[]=$s;

    $s=new stdClass();
    $s->sifra=2;
    $s->naziv='gupyfish';
    $s->garancija='';
    $s->cijena=14.99;
    $s->oblik='';
    $s->robnamarka='';
    $s->boja='crvena';

    $niz[]=$s;

    $s=new stdClass();
    $s->sifra=3;
    $s->naziv='akvarij 20L';
    $s->garancija='';
    $s->cijena=89.99;
    $s->oblik='ovalni';
    $s->robnamarka='aquael';
    $s->boja='bijela';

    $niz[]=$s;

    $s=new stdClass();
    $s->sifra=4;
    $s->naziv='akvarij 70L';
    $s->garancija='6 mjeseci';
    $s->cijena=101.99;
    $s->oblik='ovalni';
    $s->robnamarka='aquael';
    $s->boja='plava';

    $niz[]=$s;

    $s=new stdClass();
    $s->sifra=5;
    $s->naziv='gold fish';
    $s->garancija='';
    $s->cijena=9;
    $s->oblik='';
    $s->robnamarka='';
    $s->boja='plavocrvena';

    $niz[]=$s;
   

    $_SESSION['proizvodi']=$niz;



    header('location:' . $putanjaAplikacije . 'privatno/nadzornaploca.php');


}else{
    header('location:' . $putanjaAplikacije . 'index.php');
}

