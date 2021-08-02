<ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
  <li><a href="<?php echo $putanjaAplikacije; ?>index.php"><?php echo $naslovAplikacije; ?></a></li>
  <?php if(isset($_SESSION['autoriziran'])): ?>
    <li>
      <a href="<?php echo $putanjaAplikacije; ?>privatno/proizvodi">Proizvodi</a>
  
    </li>
    
    
  
    
    <li>
      <a href="<?php echo $putanjaAplikacije; ?>odjava.php">Odjava</a>
    </li>
  <?php endif;?>
</ul>