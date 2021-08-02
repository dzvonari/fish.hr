<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);
$proizvod=null;
for($i=0;$i<count($_SESSION['proizvodi']);$i++){
    $s = $_SESSION['proizvodi'][$i];
    if($s->sifra==$_GET['sifra']){
        $proizvod=$s;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../../predlozak/head.php'; ?>
</head>
<body>
    <div class="grid-container">
        <?php require_once '../../predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
        <a href="index.php" class="alert button expanded">Odustani</a>
        <form action="promjeni.php" method="post">
                <label for="naziv">Naziv</label>
                <input type="text" name="naziv" id="naziv" 
                value="<?php echo $proizvod->naziv ?>">
                <label for="garancija">Garancija</label>
                <input type="number" min="0" step="0.00" max="60" name="garancija" id="godina"
                value="<?php echo $proizvod->garancija ?>">
                <label for="cijena">Cijena</label>
                <input type="number" min="1" step=".01" max="100000" name="cijena" id="cijena"
                value="<?php echo $proizvod->cijena ?>">
                <label for="oblik">Oblik</label>
                <input type="text" name="oblik" id="oblik">
                <label for="robnamarka">Robna marka</label>
                <input type="text" name="robnamarka" id="robnamarka">
                <label for="boja">Boja</label>
                <input type="text" name="boja" id="boja">
                <input type="hidden" name="sifra" 
                value="<?php echo $proizvod->sifra ?>">
                <input type="submit" value="Promjeni proizvod">
            </form>
        </div>
        <?php require_once '../../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../../predlozak/javascript.php'; ?>
</body>
</html>