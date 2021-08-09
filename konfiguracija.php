<?php

require_once 'funkcije.php';

require_once 'mobile/Mobile_Detect.php';


      

session_start();

$naslovAplikacije = 'Fish APP';
$putanjaAplikacije = 'http://fish.hr/';

$korisnici = [
    'edunova'=>'e',
    'tomislav@fish.hr'=>'t',
    'marko@fish.hr'=>'m',
    'ivan@fish.hr'=>'i',
    'admin@fish.hr'=>'a'
];

