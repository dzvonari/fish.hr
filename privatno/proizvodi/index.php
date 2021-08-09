<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../../predlozak/head.php'; ?>
    <style>
        tr > th:nth-child(2), 
        tr > th:nth-child(3),
        tr > td:nth-child(2), 
        tr > td:nth-child(3),
        tr > td:nth-child(3),
        tr > td:nth-child(3),
        tr > td:nth-child(3),
        tfoot > tr > td:nth-child(5){
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <?php require_once '../../predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
            <?php //logiranje($_SESSION['proizvodi']); ?>

<a href="dodavanje.php" class="button expanded">Dodaj novi proizvod</a>
            <table>
                <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Garancija</th>
                        <th>Cijena</th>
                        <th>Oblik</th>
                        <th>Robna marka</th>
                        <th>Boja</th>
                        <th>Akcija</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $suma=0;
                foreach($_SESSION['proizvodi'] as $proizvod):
                $suma+=$proizvod->cijena;
                ?>
                    <tr>
                        <td><?php echo $proizvod->naziv ?></td>
                        <td><?php echo $proizvod->garancija ?></td>
                        <td><?php echo number_format($proizvod->cijena,2,',','.') ?></td>
                        <td><?php echo $proizvod->oblik ?></td>
                        <td><?php echo $proizvod->robnamarka ?></td>
                        <td><?php echo $proizvod->boja ?></td>
                        <td>
                            <a href="promjena.php?sifra=<?php echo $proizvod->sifra ?>">Promjena</a>
                            <a onclick="return confirm('Sigurno obrisati <?php echo $proizvod->naziv ?>?');" 
                            href="brisanje.php?sifra=<?php echo $proizvod->sifra ?>">Brisanje</a>
                        </td>
                    </tr>
                <?php 
                $prosjek=$suma/count($_SESSION['proizvodi']);
                endforeach;?>

                </tbody>
                <tfoot>
                        
                        <td colspan="5">Ukupno svi proizvodi</td>
                        
                        <td colspan="1"><?php echo number_format($suma,2,',','.') ?></td>
                        
     


                        <td></td>
          
       
                   
                </tfoot> 
            </table>
           
        </div>

       
        <?php require_once '../../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../../predlozak/javascript.php'; ?>
</body>
</html>