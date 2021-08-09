<?php require_once '../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once '../predlozak/head.php'; ?>
    <style>
        tr > th:nth-child(2), 
        tr > th:nth-child(3),
        tr > td:nth-child(2), 
        tr > td:nth-child(3),
        tfoot > tr > td:nth-child(1){
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <?php require_once '../predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
            <?php //logiranje($_SESSION['smjerovi']); ?>


               
  <h4>ERA</h4>
  <img src="era.jpg" alt="era" />
            
           
                
        </div>
        <?php require_once '../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../predlozak/javascript.php'; ?>
</body>
</html>