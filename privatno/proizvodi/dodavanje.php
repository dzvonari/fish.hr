<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);
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
        <form action="dodajNovi.php" method="post">
                <label for="naziv">Naziv</label>
                <input type="text" name="naziv" id="naziv">
                <label for="garancija">Garancija</label>
                <input type="number" min="1" step="1" max="300" name="garancija" id="godina">
                <label for="cijena">Cijena</label>
                <input type="number" min="1" step="1" max="100000" name="cijena" id="cijena">
                <label for="oblik">Oblik</label>
                <input type="text" name="oblik" id="oblik">
                <label for="robnamarka">Robna marka</label>
                <input type="text" name="robnamarka" id="robnamarka">
                <label for="boja">Boja</label>
                <input type="text" name="boja" id="boja">
                <input type="submit" value="Dodaj novi proizvod">
            </form>
        </div>
        <?php require_once '../../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../../predlozak/javascript.php'; ?>
</body>
</html>